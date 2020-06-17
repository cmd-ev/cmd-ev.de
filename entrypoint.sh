#!/bin/sh
set -e

cat > /etc/msmtprc <<EOF
defaults
port 587
tls on
tls_trust_file /etc/ssl/certs/ca-certificates.crt

account mail
host ${MAIL_HOST}
from ${MAIL_FROM}
auth on
user ${MAIL_USER}
password ${MAIL_PASS}

# Set a default account
account default : mail
EOF

exec /usr/local/bin/docker-php-entrypoint "$@"
