<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://iway.ru/images/new-template/logo-iway_gray.svg" width="400" alt="i`way Logo"></a></p>


## Тестовое задание для i`way

Оригинал текста задания находится здесь:

- Используя пример из документации к API, написать на фреймворке laravel или yii2 указанный метод API.
- Создать БД и таблицу countries.
- Создать модель для countries .
- Написать Контроллер и Экшен для реализации описанного запроса.
- Настроить Docker Compose-обвязку для успешного запуска проекта на ПК проверяющего.


## Реализация

- API реализован на фреймворке [Laravel](https://laravel.com/) v10
- test
- test
- test
- Шаблон docker-compose и др.файлы были взяты [отсюда](https://github.com/komissarovev/docker_php )

```
/**
@api {post} /v2/countries Создание страны
@apiName CreateCountry
@apiGroup Countries
@apiVersion 2.0.0 *
@apiUse HeaderRequest *
@apiParam {String} uid Уникальный идентификатор страны.
@apiParam {Boolean} deleted Удален.
@apiParam {String} name_ru Название страны RU.
@apiParam {String} name_en Название страны EN. *
@apiSuccess {Object[]} result Результат.
@apiSuccess {Integer} result.id ID страны.
@apiSuccess {String} result.uid Уникальный идентификатор страны.
@apiSuccess {Boolean} result.deleted Удален.
@apiSuccess {String} result.name_ru Название страны RU.
@apiSuccess {String} result.name_en Название страны EN. *
@apiSuccessExample Success-Response:
HTTP/1.1 200 OK
{
"result": {
"id": 1,
"uid": "7fde645d-26c8-11df-aea6-00173158052e",
"deleted": false,
"name_ru": "Россия",
"name_en": "Russia",
},
"error": null
} *
@apiErrorExample Error-Response:
HTTP/1.1 400 Data Validation Failed
{
"result": null,
"error": {
"name": "Bad Request",
"message": "uid cannot be blank.",
"code": 0,
"status": 400,
"type": "yii\\web\\HttpException"
}
} */
```



- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

