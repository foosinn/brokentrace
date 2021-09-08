# Segfault example for Opencensus

Segfault example with Opencensus enabled:

```
docker build -f Dockerfile-broken -t test . && docker run -it -v $PWD/script.php:/script.php test
```

Working example without Opencensus:

```
docker build -f Dockerfile-working -t test . && docker run -it -v $PWD/script.php:/script.php test
```
