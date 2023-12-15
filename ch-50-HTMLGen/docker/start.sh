# Build
docker build -t web-htmlgen .

# Run
docker run --rm -d -p 12555:8080  web-htmlgen