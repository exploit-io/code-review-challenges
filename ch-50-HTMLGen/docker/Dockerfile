FROM ubuntu:18.04

RUN apt-get update
RUN apt-get install -y python3 python3-pip

WORKDIR /app
COPY . .

RUN groupadd ctf && \
    useradd -G ctf player

RUN chmod -R 555 .

RUN python3 -m pip install --no-cache-dir -r requirements.txt
RUN rm requirements.txt Dockerfile start.sh

USER player

EXPOSE 8080
CMD ["python3", "app.py"]