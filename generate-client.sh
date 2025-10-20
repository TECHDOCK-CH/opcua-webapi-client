#!/bin/bash

set -e

# Configuration
readonly SPEC_URL="https://webapi.opcfoundation.org/data/opc.ua.openapi.allservices.json"
readonly SPEC_FILE="openapi-spec.json"
readonly CONFIG_FILE="openapi-config.json"
readonly OUTPUT_DIR="$(pwd)"
readonly PACKAGE_NAME="techdock/opcua-webapi-client"
readonly GENERATOR_IMAGE="docker.io/openapitools/openapi-generator-cli:latest"

log() {
    echo "[$(date +'%Y-%m-%d %H:%M:%S')] $*"
}

download_spec() {
    if [[ ! -f "${SPEC_FILE}" ]]; then
        log "Downloading OpenAPI spec..."
        curl -o "${SPEC_FILE}" "${SPEC_URL}"
        log "✓ OpenAPI spec downloaded"
    else
        log "✓ OpenAPI spec already exists"
    fi
}

patch_openapi_spec() {
    log "Patching OpenAPI spec with TechDock contact information..."

    if [[ ! -f "${SPEC_FILE}" ]]; then
        log "Error: Spec file ${SPEC_FILE} not found"
        exit 1
    fi

    # Replace contact email with TechDock email using jq
    jq '.info.contact.email = "info@techdock.ch"' "${SPEC_FILE}" > "${SPEC_FILE}.tmp" && mv "${SPEC_FILE}.tmp" "${SPEC_FILE}"

    log "✓ OpenAPI spec patched"
}

prepare_output_directory() {
    log "Preparing output directory..."
    mkdir -p "${OUTPUT_DIR}"
    log "✓ Output directory ready"
}

validate_config() {
    if [[ ! -f "${CONFIG_FILE}" ]]; then
        log "Error: Config file ${CONFIG_FILE} not found"
        exit 1
    fi
    log "✓ Config file validated"
}

generate_php_client() {
    log "Generating PHP client with OpenAPI Generator..."
    
    # Create necessary directories
    mkdir -p "${OUTPUT_DIR}/src/Model"
    mkdir -p "${OUTPUT_DIR}/lib"
    mkdir -p "${OUTPUT_DIR}/docs"
    mkdir -p "${OUTPUT_DIR}/test"
    
    podman run --rm \
        --security-opt label=disable \
        -v "${OUTPUT_DIR}:/local:Z" \
        "${GENERATOR_IMAGE}" generate \
        -i "/local/${SPEC_FILE}" \
        -g php \
        -o /local \
        -c "/local/${CONFIG_FILE}" \
        --git-user-id TECHDOCK-CH \
        --git-repo-id opcua-webapi-client \
        --skip-operation-example \
        --skip-validate-spec
    
    log "✓ PHP client generated successfully"
}

set_file_permissions() {
    log "Setting file permissions..."
    find "${OUTPUT_DIR}" -type f -name "*.php" -exec chmod 644 {} \;
    find "${OUTPUT_DIR}" -type d -exec chmod 755 {} \;
    log "✓ File permissions set"
}

cleanup() {
    if [[ -f "${SPEC_FILE}" ]]; then
        rm "${SPEC_FILE}"
        log "✓ Cleaned up temporary spec file"
    fi
}

show_completion_message() {
    log ""
    log "🎉 OPC UA Web API PHP Client generated!"
    log "   Package: ${PACKAGE_NAME}"
    log "   Location: ${OUTPUT_DIR}"
    log ""
    log "Next steps:"
    log "1. Review generated code"
    log "2. Add to git repository"
    log "3. Publish to Packagist"
}

main() {
    log "Starting OPC UA Web API PHP Client generation..."

    validate_config
    download_spec
    patch_openapi_spec
    prepare_output_directory
    generate_php_client
    set_file_permissions
    cleanup
    show_completion_message
}

# Execute main function
main "$@"