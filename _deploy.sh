#!/bin/sh
s3cmd sync _site/ s3://toddeichel.com/ \
  --delete-removed \
  --acl-public \
  --verbose \
  --exclude 'deploy.sh' \
  # --dry-run
  # --reduced-redundancy \
