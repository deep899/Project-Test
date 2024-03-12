
## Project setup
```
docker build -t IB .
```
### how to create the volume
```
docker volume create --name demo-earthly
```
### volume check
```
docker volume ls
```
### Compiles and hot-reloads for development
```
docker run -it -v demo-earthly:/IB -d 8081:80 IB

```
