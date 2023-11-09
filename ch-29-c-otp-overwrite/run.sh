docker run \
    -it \
    --rm \
    -v "$PWD":/app \
    -w /app \
    i386/ubuntu \
    /app/vuln

