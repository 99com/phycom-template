#!/bin/sh
set -e

host="$1"
shift
cmd="$@"

until psql -h "$host" -U "$APP_DB_USER" -d "$APP_DB_NAME" -c '\q'; do
  >&2 echo "Postgres is unavailable - sleeping..."
  sleep 1
done

>&2 echo "Postgres is up - executing command"
exec $cmd
