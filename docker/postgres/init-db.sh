#!/bin/bash
set -e

POSTGRES="psql --username ${POSTGRES_USER}"

${POSTGRES} -d ${POSTGRES_DB} -c "CREATE EXTENSION IF NOT EXISTS fuzzystrmatch"
${POSTGRES} -d ${POSTGRES_DB} -c "CREATE EXTENSION IF NOT EXISTS unaccent"
