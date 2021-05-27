# V1 Discipline


## Index




> Example request:

```bash
curl -X GET \
    -G "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines?per_page=10&page=1&search=IMD1101" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines"
);

let params = {
    "per_page": "10",
    "page": "1",
    "search": "IMD1101",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'per_page'=> '10',
            'page'=> '1',
            'search'=> 'IMD1101',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 2,
            "code": "OQQKP4S",
            "name": "Aut est quos at ut.",
            "synopsis": "Ut eum officiis consequatur quia sint. Impedit ut quos sed sapiente et unde omnis. Et iusto dolor cum qui delectus et perferendis.",
            "difficulties": "Modi et soluta perferendis autem culpa est.",
            "professor_id": 4,
            "professor": {
                "id": 4,
                "name": "Micheal Borer",
                "profile_pic_link": "https:\/\/lorempixel.com\/640\/480\/?51467",
                "public_email": "schneider.adrienne@hotmail.com",
                "user_id": 8
            }
        },
        {
            "id": 3,
            "code": "OYPRDMV",
            "name": "Aut ut saepe optio modi.",
            "synopsis": "Autem ad officiis sit consequatur voluptatem. Sunt quas ut maxime eveniet. In numquam sapiente voluptatum eum. Esse ea quis sequi quibusdam provident.",
            "difficulties": "Est accusamus molestias earum possimus.",
            "professor_id": 5,
            "professor": {
                "id": 5,
                "name": "Ernestine Sawayn",
                "profile_pic_link": "https:\/\/lorempixel.com\/640\/480\/?62450",
                "public_email": "norris.schaden@roob.com",
                "user_id": 9
            }
        },
        {
            "id": 1,
            "code": "IADRCRW",
            "name": "Nulla quo enim eaque et.",
            "synopsis": "A aspernatur porro aut. Alias enim fugit totam numquam. Temporibus aut nobis sed culpa.",
            "difficulties": "Quis quis aut consectetur corrupti saepe.",
            "professor_id": 3,
            "professor": {
                "id": 3,
                "name": "Yvette Schroeder",
                "profile_pic_link": "https:\/\/lorempixel.com\/640\/480\/?34232",
                "public_email": "hkirlin@harris.com",
                "user_id": 7
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/api\/v1\/disciplines?page=1",
        "last": "http:\/\/localhost:8000\/api\/v1\/disciplines?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Anterior",
                "active": false
            },
            {
                "url": "http:\/\/localhost:8000\/api\/v1\/disciplines?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Próximo &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost:8000\/api\/v1\/disciplines",
        "per_page": "3",
        "to": 3,
        "total": 3
    }
}
```
<div id="execution-results-GETapi-v1-disciplines" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-disciplines"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-disciplines"></code></pre>
</div>
<div id="execution-error-GETapi-v1-disciplines" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-disciplines"></code></pre>
</div>
<form id="form-GETapi-v1-disciplines" data-method="GET" data-path="api/v1/disciplines" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-disciplines', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-disciplines" onclick="tryItOut('GETapi-v1-disciplines');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-disciplines" onclick="cancelTryOut('GETapi-v1-disciplines');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-disciplines" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/disciplines</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-v1-disciplines" data-component="query"  hidden>
<br>
Quantidade de entidades por página.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-v1-disciplines" data-component="query"  hidden>
<br>
Página da paginação das entidades.
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-v1-disciplines" data-component="query"  hidden>
<br>
Termo de busca (nome do professor, nome da disciplina, código da disciplina).
</p>
</form>


## Show




> Example request:

```bash
curl -X GET \
    -G "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "code": "IADRCRW",
        "name": "Nulla quo enim eaque et.",
        "synopsis": "A aspernatur porro aut. Alias enim fugit totam numquam. Temporibus aut nobis sed culpa.",
        "difficulties": "Quis quis aut consectetur corrupti saepe.",
        "professor_id": 3,
        "professor": {
            "id": 3,
            "name": "Yvette Schroeder",
            "profile_pic_link": "https:\/\/lorempixel.com\/640\/480\/?34232",
            "public_email": "hkirlin@harris.com",
            "user_id": 7
        },
        "medias": [
            {
                "id": 1,
                "title": "Totam quia omnis fugit.",
                "type": "materiais",
                "url": "Dolorem voluptatem qui voluptatem rem vel.",
                "is_trailer": false,
                "discipline_id": 1
            },
            {
                "id": 2,
                "title": "Quis eius enim et.",
                "type": "video",
                "url": "Autem sint quo provident voluptates iure.",
                "is_trailer": false,
                "discipline_id": 1
            }
        ],
        "faqs": [],
        "classificationsDisciplines": []
    }
}
```
<div id="execution-results-GETapi-v1-disciplines--discipline-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-disciplines--discipline-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-disciplines--discipline-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-disciplines--discipline-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-disciplines--discipline-"></code></pre>
</div>
<form id="form-GETapi-v1-disciplines--discipline-" data-method="GET" data-path="api/v1/disciplines/{discipline}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-disciplines--discipline-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-disciplines--discipline-" onclick="tryItOut('GETapi-v1-disciplines--discipline-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-disciplines--discipline-" onclick="cancelTryOut('GETapi-v1-disciplines--discipline-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-disciplines--discipline-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/disciplines/{discipline}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discipline</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discipline" data-endpoint="GETapi-v1-disciplines--discipline-" data-component="url" required  hidden>
<br>
O identificador da disciplina.
</p>
</form>


## Store

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Exemplo II","code":"EXII","synopsis":"Esta disciplina \u00e9 um exemplo","difficulties":"mudar@123","media-trailer":"https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ","media-video":"https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ","media-podcast":"https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ","media-material":"https:\/\/drive.google.com\/file\/d\/1Xaeu31fSQY3bNmg38uM3P9fRl8ml3zes\/view?usp=sharing","professor_id":1,"classificacao-metodologias-classicas":1,"classificacao-metodologias-ativas":1,"classificacao-discussao-social":1,"classificacao-discussao-tecnica":1,"classificacao-abordagem-teorica":1,"classificacao-abordagem-pratica":1,"classificacao-av-provas":1,"classificacao-av-atividades":1}'

```

```javascript
const url = new URL(
    "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Exemplo II",
    "code": "EXII",
    "synopsis": "Esta disciplina \u00e9 um exemplo",
    "difficulties": "mudar@123",
    "media-trailer": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
    "media-video": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
    "media-podcast": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
    "media-material": "https:\/\/drive.google.com\/file\/d\/1Xaeu31fSQY3bNmg38uM3P9fRl8ml3zes\/view?usp=sharing",
    "professor_id": 1,
    "classificacao-metodologias-classicas": 1,
    "classificacao-metodologias-ativas": 1,
    "classificacao-discussao-social": 1,
    "classificacao-discussao-tecnica": 1,
    "classificacao-abordagem-teorica": 1,
    "classificacao-abordagem-pratica": 1,
    "classificacao-av-provas": 1,
    "classificacao-av-atividades": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'Exemplo II',
            'code' => 'EXII',
            'synopsis' => 'Esta disciplina é um exemplo',
            'difficulties' => 'mudar@123',
            'media-trailer' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'media-video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'media-podcast' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'media-material' => 'https://drive.google.com/file/d/1Xaeu31fSQY3bNmg38uM3P9fRl8ml3zes/view?usp=sharing',
            'professor_id' => 1,
            'classificacao-metodologias-classicas' => 1,
            'classificacao-metodologias-ativas' => 1,
            'classificacao-discussao-social' => 1,
            'classificacao-discussao-tecnica' => 1,
            'classificacao-abordagem-teorica' => 1,
            'classificacao-abordagem-pratica' => 1,
            'classificacao-av-provas' => 1,
            'classificacao-av-atividades' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (201):

```json
{
    "message": "Disciplina cadastrada com sucesso!",
    "data": {
        "id": 10,
        "name": "Fundamentos do Exemplo I",
        "code": "FME I",
        "synopsis": "Este é um exemplo",
        "difficulties": "Exemplo",
        "professor_id": 5,
        "media-trailer": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
        "media-video": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
        "media-podcast": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
        "media-material": "https:\/\/drive.google.com\/file\/d\/1Xaeu31fSQY3bNmg38uM3P9fRl8ml3zes\/view?usp=sharing",
        "classificacao-metodologias-classicas": 1,
        "classificacao-metodologias-ativas": 1,
        "classificacao-discussao-social": 1,
        "classificacao-discussao-tecnica": 1,
        "classificacao-abordagem-teorica": 1,
        "classificacao-abordagem-pratica": 1,
        "classificacao-av-provas": 1,
        "classificacao-av-atividades": 1
    }
}
```
<div id="execution-results-POSTapi-v1-disciplines" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-disciplines"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-disciplines"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-disciplines" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-disciplines"></code></pre>
</div>
<form id="form-POSTapi-v1-disciplines" data-method="POST" data-path="api/v1/disciplines" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-disciplines', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-disciplines" onclick="tryItOut('POSTapi-v1-disciplines');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-disciplines" onclick="cancelTryOut('POSTapi-v1-disciplines');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-disciplines" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/disciplines</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-disciplines" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-disciplines" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-disciplines" data-component="body" required  hidden>
<br>
Nome da disciplina.
</p>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="POSTapi-v1-disciplines" data-component="body" required  hidden>
<br>
Código da disciplina.
</p>
<p>
<b><code>synopsis</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="synopsis" data-endpoint="POSTapi-v1-disciplines" data-component="body" required  hidden>
<br>
Sínopse da disciplina.
</p>
<p>
<b><code>difficulties</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="difficulties" data-endpoint="POSTapi-v1-disciplines" data-component="body" required  hidden>
<br>
Deve ser igual ao campo `password`.
</p>
<p>
<b><code>media-trailer</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="media-trailer" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Link do Youtube.
</p>
<p>
<b><code>media-video</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="media-video" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Link do Youtube.
</p>
<p>
<b><code>media-podcast</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="media-podcast" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Link do Youtube.
</p>
<p>
<b><code>media-material</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="media-material" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Link do Google Drive.
</p>
<p>
<b><code>professor_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="professor_id" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Id do professor.
</p>
<p>
<b><code>classificacao-metodologias-classicas</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="classificacao-metodologias-classicas" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Numero entre 0 e 6.
</p>
<p>
<b><code>classificacao-metodologias-ativas</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="classificacao-metodologias-ativas" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Numero entre 0 e 6.
</p>
<p>
<b><code>classificacao-discussao-social</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="classificacao-discussao-social" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Numero entre 0 e 6.
</p>
<p>
<b><code>classificacao-discussao-tecnica</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="classificacao-discussao-tecnica" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Numero entre 0 e 6.
</p>
<p>
<b><code>classificacao-abordagem-teorica</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="classificacao-abordagem-teorica" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Numero entre 0 e 6.
</p>
<p>
<b><code>classificacao-abordagem-pratica</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="classificacao-abordagem-pratica" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Numero entre 0 e 6.
</p>
<p>
<b><code>classificacao-av-provas</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="classificacao-av-provas" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Numero entre 0 e 6.
</p>
<p>
<b><code>classificacao-av-atividades</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="classificacao-av-atividades" data-endpoint="POSTapi-v1-disciplines" data-component="body"  hidden>
<br>
Numero entre 0 e 6.
</p>

</form>


## Update

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "message": "Disciplina editada com sucesso!",
    "data": {
        "id": 10,
        "name": "Fundamentos do Exemplo II",
        "code": "FME II",
        "synopsis": "Este é um exemplo editado",
        "difficulties": "Exemplo 2",
        "professor_id": 3,
        "media-trailer": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
        "media-video": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
        "media-podcast": "https:\/\/www.youtube.com\/watch?v=dQw4w9WgXcQ",
        "media-material": "https:\/\/drive.google.com\/file\/d\/1Xaeu31fSQY3bNmg38uM3P9fRl8ml3zes\/view?usp=sharing",
        "classificacao-metodologias-classicas": 1,
        "classificacao-metodologias-ativas": 1,
        "classificacao-discussao-social": 1,
        "classificacao-discussao-tecnica": 1,
        "classificacao-abordagem-teorica": 1,
        "classificacao-abordagem-pratica": 1,
        "classificacao-av-provas": 1,
        "classificacao-av-atividades": 1
    }
}
```
<div id="execution-results-PUTapi-v1-disciplines--discipline-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-disciplines--discipline-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-disciplines--discipline-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-disciplines--discipline-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-disciplines--discipline-"></code></pre>
</div>
<form id="form-PUTapi-v1-disciplines--discipline-" data-method="PUT" data-path="api/v1/disciplines/{discipline}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-disciplines--discipline-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-disciplines--discipline-" onclick="tryItOut('PUTapi-v1-disciplines--discipline-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-disciplines--discipline-" onclick="cancelTryOut('PUTapi-v1-disciplines--discipline-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-disciplines--discipline-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/disciplines/{discipline}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/disciplines/{discipline}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-disciplines--discipline-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-disciplines--discipline-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discipline</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discipline" data-endpoint="PUTapi-v1-disciplines--discipline-" data-component="url" required  hidden>
<br>
O identificador da disciplina.
</p>
</form>


## Destroy

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://portaldasdisciplinas.imd.ufrn.br/api/v1/disciplines/1',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "message": "Disciplina apagada com sucesso!"
}
```
<div id="execution-results-DELETEapi-v1-disciplines--discipline-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-disciplines--discipline-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-disciplines--discipline-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-disciplines--discipline-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-disciplines--discipline-"></code></pre>
</div>
<form id="form-DELETEapi-v1-disciplines--discipline-" data-method="DELETE" data-path="api/v1/disciplines/{discipline}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-disciplines--discipline-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-disciplines--discipline-" onclick="tryItOut('DELETEapi-v1-disciplines--discipline-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-disciplines--discipline-" onclick="cancelTryOut('DELETEapi-v1-disciplines--discipline-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-disciplines--discipline-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/disciplines/{discipline}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-disciplines--discipline-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-disciplines--discipline-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discipline</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discipline" data-endpoint="DELETEapi-v1-disciplines--discipline-" data-component="url" required  hidden>
<br>
O identificador da disciplina.
</p>
</form>



