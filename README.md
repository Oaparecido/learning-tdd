# ✨ LEARNING-TDD ✨
📌 learning-tdd is a project for you learn how to development in TDD (**T**est **D**riven **D**evelopment). 

## 🚀 Installation 🚀
📌 It's very simple you just need to have the **docker** and **docker-compose** installed.<br/>
With that installed just run the following command.

```shell
 $ docker-compose build
```
```shell
 $ docker-compose up -d
```
```shell
 $ docker-compose exec app
```

## 🚀 How to create new tests 🚀
📌 **First:** you need create a new file test into **./tests**

📌 **Second:** added a new tag testsuite into **phpunit.xml**

```xml
    <testsuite name="new name for the you testsuite">
        <file>"file path"</file>
    </testsuite>
```

## 🚀 How to run tests 🚀

```shell
 $ docker-compose exec app phpunit --testsuite name_from_test
```

📌 For more information, access:<br/>
[(Doc) - PHPUnit](https://phpunit.de/documentation.html)

### 🚨 The test sets created so far 🚨
#### ✅ Example test:
📌 Is a test for exemplification from use phpunit with testsuite.

**RUN**<br/>
```shell
 $ docker-compose exec app phpunit --testsuite example
```