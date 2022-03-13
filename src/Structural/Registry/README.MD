# Registry (Реестр)

Для реализации **централизованного хранения объектов**, часто используемых во всем приложении, как правило, реализуется с
помощью абстрактного класса только c статическими методами (или с помощью шаблона Singleton).

Помните, что это вводит
глобальное состояние, которого следует избегать. Используйте **Dependency Injection** вместо **Registry**.

---

### UML Diagram
![Registry](https://user-images.githubusercontent.com/50992188/158058413-030375fa-6b4a-4bf6-a94a-ba36004cdf63.png)


---

### How to run tests?
`./vendor/bin/phpunit src/Structural/Registry/Tests/`