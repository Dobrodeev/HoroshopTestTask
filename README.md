## Задание

Разработать аналог [cli](https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BA%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%BD%D0%BE%D0%B9_%D1%81%D1%82%D1%80%D0%BE%D0%BA%D0%B8).

Визуально это должно выглядеть как input с выводом выполненных команд и их результатов в html разметку страницы.

## Пример интерфейса

![https://s3-us-west-2.amazonaws.com/secure.notion-static.com/9a0eec54-f7f5-4508-a018-0ac73ac54949/Untitled-1.jpg](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/9a0eec54-f7f5-4508-a018-0ac73ac54949/Untitled-1.jpg)

## Условия

1. Должны существовать несколько видов собак: **сиба-ину, мопс, такса, плюшевый лабрадор, резиновая такса с пищалкой**.
2. Собаки должны уметь **издавать звуки** (лаять, пищать) и **охотиться**. При этом стоит помнить, что мопсу охотиться будет лень, плюшевые пёсики не издают звуков и точно не смогут охотиться.
3. Мы можем написать команду вида "mops sound" и получить в ответ "woof! woof!", дальше по аналогии. Введенные команды и их результат выводить выше с новой строки.

*Команды*: `sound`, `hunt`.

*Пёсики*: `shiba-inu`, `mops`, `dachshund`, `plush-labrador`, `rubber-dachshund`.

[Ответы команд для разных собак](https://www.notion.so/65b36b1577544f51a2f5ae27151a2079)

Ответ “**no reaction” означает что при выполнении команды “plush-labrador sound” должен вывестись результат “**no reaction”

## Требования к реализации

1. Версия php 7.3
2. Использование фреймворков запрещено
3. Следование принципам ООП, KISS

Будет плюсом: покрыть код unit тестами (phpunit)

## Результат

Выполненное тестовое задание разместить на github и прислать ссылку на репозиторий.