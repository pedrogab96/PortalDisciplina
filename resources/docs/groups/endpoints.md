# Endpoints


## Show the application&#039;s login form.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/login"
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


> Example response (500):

```json
{
    "message": "Undefined variable: errors (View: \/var\/www\/app\/resources\/views\/auth\/login.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "\/var\/www\/app\/resources\/views\/auth\/login.blade.php",
    "line": 30,
    "trace": [
        {
            "file": "\/var\/www\/app\/resources\/views\/auth\/login.blade.php",
            "line": 30,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 69,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 35,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 791,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 761,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/app\/Http\/Middleware\/RedirectIfAuthenticated.php",
            "line": 30,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\RedirectIfAuthenticated",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/symfony\/console\/Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/symfony\/console\/Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/symfony\/console\/Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-login"></code></pre>
</div>
<div id="execution-error-GETapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-login"></code></pre>
</div>
<form id="form-GETapi-login" data-method="GET" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-login" onclick="tryItOut('GETapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-login" onclick="cancelTryOut('GETapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/login</code></b>
</p>
</form>


## Handle a login request to the application.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
</form>


## Log the user out of the application.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout"></code></pre>
</div>
<form id="form-POSTapi-logout" data-method="POST" data-path="api/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-logout" onclick="tryItOut('POSTapi-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-logout" onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/logout</code></b>
</p>
</form>


## Display the password confirmation view.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password/confirm"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-password-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-password-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-password-confirm"></code></pre>
</div>
<div id="execution-error-GETapi-password-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-password-confirm"></code></pre>
</div>
<form id="form-GETapi-password-confirm" data-method="GET" data-path="api/password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-password-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-password-confirm" onclick="tryItOut('GETapi-password-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-password-confirm" onclick="cancelTryOut('GETapi-password-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-password-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/password/confirm</code></b>
</p>
</form>


## Confirm the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-password-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-password-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-confirm"></code></pre>
</div>
<div id="execution-error-POSTapi-password-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-confirm"></code></pre>
</div>
<form id="form-POSTapi-password-confirm" data-method="POST" data-path="api/password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-password-confirm" onclick="tryItOut('POSTapi-password-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-password-confirm" onclick="cancelTryOut('POSTapi-password-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-password-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/password/confirm</code></b>
</p>
</form>


## api/perfil




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/perfil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/perfil"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-perfil" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-perfil"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-perfil"></code></pre>
</div>
<div id="execution-error-GETapi-perfil" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-perfil"></code></pre>
</div>
<form id="form-GETapi-perfil" data-method="GET" data-path="api/perfil" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-perfil', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-perfil" onclick="tryItOut('GETapi-perfil');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-perfil" onclick="cancelTryOut('GETapi-perfil');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-perfil" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/perfil</code></b>
</p>
</form>


## api/perfil




> Example request:

```bash
curl -X POST \
    "http://localhost/api/perfil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/perfil"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-perfil" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-perfil"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-perfil"></code></pre>
</div>
<div id="execution-error-POSTapi-perfil" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-perfil"></code></pre>
</div>
<form id="form-POSTapi-perfil" data-method="POST" data-path="api/perfil" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-perfil', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-perfil" onclick="tryItOut('POSTapi-perfil');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-perfil" onclick="cancelTryOut('POSTapi-perfil');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-perfil" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/perfil</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/disciplinas/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-disciplinas-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-disciplinas-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-disciplinas-create"></code></pre>
</div>
<div id="execution-error-GETapi-disciplinas-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-disciplinas-create"></code></pre>
</div>
<form id="form-GETapi-disciplinas-create" data-method="GET" data-path="api/disciplinas/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-disciplinas-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-disciplinas-create" onclick="tryItOut('GETapi-disciplinas-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-disciplinas-create" onclick="cancelTryOut('GETapi-disciplinas-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-disciplinas-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/disciplinas/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/disciplinas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sequi","code":"soluta","synopsis":{},"difficulties":{},"media-trailer":{},"media-video":{},"media-podcast":{},"media-material":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sequi",
    "code": "soluta",
    "synopsis": {},
    "difficulties": {},
    "media-trailer": {},
    "media-video": {},
    "media-podcast": {},
    "media-material": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-disciplinas" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-disciplinas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-disciplinas"></code></pre>
</div>
<div id="execution-error-POSTapi-disciplinas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-disciplinas"></code></pre>
</div>
<form id="form-POSTapi-disciplinas" data-method="POST" data-path="api/disciplinas" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-disciplinas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-disciplinas" onclick="tryItOut('POSTapi-disciplinas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-disciplinas" onclick="cancelTryOut('POSTapi-disciplinas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-disciplinas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/disciplinas</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-disciplinas" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="POSTapi-disciplinas" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>synopsis</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="synopsis" data-endpoint="POSTapi-disciplinas" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>difficulties</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="difficulties" data-endpoint="POSTapi-disciplinas" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>media-trailer</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="media-trailer" data-endpoint="POSTapi-disciplinas" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>media-video</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="media-video" data-endpoint="POSTapi-disciplinas" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>media-podcast</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="media-podcast" data-endpoint="POSTapi-disciplinas" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>media-material</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="media-material" data-endpoint="POSTapi-disciplinas" data-component="body"  hidden>
<br>

</p>

</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/disciplinas/et/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas/et/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-disciplinas--disciplina--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-disciplinas--disciplina--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-disciplinas--disciplina--edit"></code></pre>
</div>
<div id="execution-error-GETapi-disciplinas--disciplina--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-disciplinas--disciplina--edit"></code></pre>
</div>
<form id="form-GETapi-disciplinas--disciplina--edit" data-method="GET" data-path="api/disciplinas/{disciplina}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-disciplinas--disciplina--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-disciplinas--disciplina--edit" onclick="tryItOut('GETapi-disciplinas--disciplina--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-disciplinas--disciplina--edit" onclick="cancelTryOut('GETapi-disciplinas--disciplina--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-disciplinas--disciplina--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/disciplinas/{disciplina}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>disciplina</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="disciplina" data-endpoint="GETapi-disciplinas--disciplina--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/disciplinas/eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas/eius"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-disciplinas--disciplina-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-disciplinas--disciplina-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-disciplinas--disciplina-"></code></pre>
</div>
<div id="execution-error-PUTapi-disciplinas--disciplina-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-disciplinas--disciplina-"></code></pre>
</div>
<form id="form-PUTapi-disciplinas--disciplina-" data-method="PUT" data-path="api/disciplinas/{disciplina}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-disciplinas--disciplina-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-disciplinas--disciplina-" onclick="tryItOut('PUTapi-disciplinas--disciplina-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-disciplinas--disciplina-" onclick="cancelTryOut('PUTapi-disciplinas--disciplina-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-disciplinas--disciplina-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/disciplinas/{disciplina}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/disciplinas/{disciplina}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>disciplina</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="disciplina" data-endpoint="PUTapi-disciplinas--disciplina-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/disciplinas/laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas/laborum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-disciplinas--disciplina-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-disciplinas--disciplina-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-disciplinas--disciplina-"></code></pre>
</div>
<div id="execution-error-DELETEapi-disciplinas--disciplina-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-disciplinas--disciplina-"></code></pre>
</div>
<form id="form-DELETEapi-disciplinas--disciplina-" data-method="DELETE" data-path="api/disciplinas/{disciplina}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-disciplinas--disciplina-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-disciplinas--disciplina-" onclick="tryItOut('DELETEapi-disciplinas--disciplina-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-disciplinas--disciplina-" onclick="cancelTryOut('DELETEapi-disciplinas--disciplina-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-disciplinas--disciplina-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/disciplinas/{disciplina}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>disciplina</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="disciplina" data-endpoint="DELETEapi-disciplinas--disciplina-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/professores




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/professores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/professores"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-professores" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-professores"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-professores"></code></pre>
</div>
<div id="execution-error-GETapi-professores" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-professores"></code></pre>
</div>
<form id="form-GETapi-professores" data-method="GET" data-path="api/professores" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-professores', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-professores" onclick="tryItOut('GETapi-professores');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-professores" onclick="cancelTryOut('GETapi-professores');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-professores" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/professores</code></b>
</p>
</form>


## api/professores/create




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/professores/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/professores/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-professores-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-professores-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-professores-create"></code></pre>
</div>
<div id="execution-error-GETapi-professores-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-professores-create"></code></pre>
</div>
<form id="form-GETapi-professores-create" data-method="GET" data-path="api/professores/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-professores-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-professores-create" onclick="tryItOut('GETapi-professores-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-professores-create" onclick="cancelTryOut('GETapi-professores-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-professores-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/professores/create</code></b>
</p>
</form>


## api/professores




> Example request:

```bash
curl -X POST \
    "http://localhost/api/professores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptatem","email":"occaecati","public_email":{},"password":"illo"}'

```

```javascript
const url = new URL(
    "http://localhost/api/professores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptatem",
    "email": "occaecati",
    "public_email": {},
    "password": "illo"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-professores" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-professores"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-professores"></code></pre>
</div>
<div id="execution-error-POSTapi-professores" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-professores"></code></pre>
</div>
<form id="form-POSTapi-professores" data-method="POST" data-path="api/professores" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-professores', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-professores" onclick="tryItOut('POSTapi-professores');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-professores" onclick="cancelTryOut('POSTapi-professores');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-professores" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/professores</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-professores" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-professores" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>public_email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="public_email" data-endpoint="POSTapi-professores" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-professores" data-component="body" required  hidden>
<br>

</p>

</form>


## api/professores/{professore}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/professores/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/professores/sapiente"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-professores--professore-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-professores--professore-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-professores--professore-"></code></pre>
</div>
<div id="execution-error-DELETEapi-professores--professore-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-professores--professore-"></code></pre>
</div>
<form id="form-DELETEapi-professores--professore-" data-method="DELETE" data-path="api/professores/{professore}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-professores--professore-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-professores--professore-" onclick="tryItOut('DELETEapi-professores--professore-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-professores--professore-" onclick="cancelTryOut('DELETEapi-professores--professore-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-professores--professore-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/professores/{professore}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>professore</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="professore" data-endpoint="DELETEapi-professores--professore-" data-component="url" required  hidden>
<br>

</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/disciplinas/ut/faqs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"laborum","content":"pariatur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas/ut/faqs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "laborum",
    "content": "pariatur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-disciplinas--disciplina--faqs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-disciplinas--disciplina--faqs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-disciplinas--disciplina--faqs"></code></pre>
</div>
<div id="execution-error-POSTapi-disciplinas--disciplina--faqs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-disciplinas--disciplina--faqs"></code></pre>
</div>
<form id="form-POSTapi-disciplinas--disciplina--faqs" data-method="POST" data-path="api/disciplinas/{disciplina}/faqs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-disciplinas--disciplina--faqs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-disciplinas--disciplina--faqs" onclick="tryItOut('POSTapi-disciplinas--disciplina--faqs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-disciplinas--disciplina--faqs" onclick="cancelTryOut('POSTapi-disciplinas--disciplina--faqs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-disciplinas--disciplina--faqs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/disciplinas/{disciplina}/faqs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>disciplina</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="disciplina" data-endpoint="POSTapi-disciplinas--disciplina--faqs" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-disciplinas--disciplina--faqs" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTapi-disciplinas--disciplina--faqs" data-component="body" required  hidden>
<br>

</p>

</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/disciplinas/voluptate/faqs/maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas/voluptate/faqs/maiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-disciplinas--disciplina--faqs--faq-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-disciplinas--disciplina--faqs--faq-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-disciplinas--disciplina--faqs--faq-"></code></pre>
</div>
<div id="execution-error-PUTapi-disciplinas--disciplina--faqs--faq-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-disciplinas--disciplina--faqs--faq-"></code></pre>
</div>
<form id="form-PUTapi-disciplinas--disciplina--faqs--faq-" data-method="PUT" data-path="api/disciplinas/{disciplina}/faqs/{faq}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-disciplinas--disciplina--faqs--faq-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-disciplinas--disciplina--faqs--faq-" onclick="tryItOut('PUTapi-disciplinas--disciplina--faqs--faq-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-disciplinas--disciplina--faqs--faq-" onclick="cancelTryOut('PUTapi-disciplinas--disciplina--faqs--faq-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-disciplinas--disciplina--faqs--faq-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/disciplinas/{disciplina}/faqs/{faq}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/disciplinas/{disciplina}/faqs/{faq}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>disciplina</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="disciplina" data-endpoint="PUTapi-disciplinas--disciplina--faqs--faq-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>faq</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq" data-endpoint="PUTapi-disciplinas--disciplina--faqs--faq-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/disciplinas/odit/faqs/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas/odit/faqs/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-disciplinas--disciplina--faqs--faq-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-disciplinas--disciplina--faqs--faq-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-disciplinas--disciplina--faqs--faq-"></code></pre>
</div>
<div id="execution-error-DELETEapi-disciplinas--disciplina--faqs--faq-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-disciplinas--disciplina--faqs--faq-"></code></pre>
</div>
<form id="form-DELETEapi-disciplinas--disciplina--faqs--faq-" data-method="DELETE" data-path="api/disciplinas/{disciplina}/faqs/{faq}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-disciplinas--disciplina--faqs--faq-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-disciplinas--disciplina--faqs--faq-" onclick="tryItOut('DELETEapi-disciplinas--disciplina--faqs--faq-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-disciplinas--disciplina--faqs--faq-" onclick="cancelTryOut('DELETEapi-disciplinas--disciplina--faqs--faq-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-disciplinas--disciplina--faqs--faq-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/disciplinas/{disciplina}/faqs/{faq}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>disciplina</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="disciplina" data-endpoint="DELETEapi-disciplinas--disciplina--faqs--faq-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>faq</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq" data-endpoint="DELETEapi-disciplinas--disciplina--faqs--faq-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/disciplinas/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/disciplinas/aut"
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


> Example response (500):

```json
{
    "message": "SQLSTATE[42S02]: Base table or view not found: 1146 Table 'portal_disciplina.disciplines' doesn't exist (SQL: select * from `disciplines` where `disciplines`.`id` = aut limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 678,
    "trace": [
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 638,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 346,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2313,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2301,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2796,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2302,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 588,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 572,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Concerns\/BuildsQueries.php",
            "line": 242,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 376,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 408,
            "function": "find",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/app\/Http\/Controllers\/DisciplineController.php",
            "line": 163,
            "function": "findOrFail",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "show",
            "class": "App\\Http\\Controllers\\DisciplineController",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/symfony\/console\/Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/symfony\/console\/Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/symfony\/console\/Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-disciplinas--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-disciplinas--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-disciplinas--id-"></code></pre>
</div>
<div id="execution-error-GETapi-disciplinas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-disciplinas--id-"></code></pre>
</div>
<form id="form-GETapi-disciplinas--id-" data-method="GET" data-path="api/disciplinas/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-disciplinas--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-disciplinas--id-" onclick="tryItOut('GETapi-disciplinas--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-disciplinas--id-" onclick="cancelTryOut('GETapi-disciplinas--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-disciplinas--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/disciplinas/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-disciplinas--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/charts/pass_rate




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/charts/pass_rate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/charts/pass_rate"
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


> Example response (200):

```json

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="CaID-sWQ4oro51-MUzVaQlu5v5a4XqK2Xpg9uVmONKI" />
    <meta name="lang" content="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="portal das disciplinas, imd">
    <meta name="robots" content="all">
    <title>    Taxa de Aprovação das Disciplinas - Portal das Disciplinas IMD
</title>
    <meta name="description" content="    Aqui você conseguirá ver a taxa de aprovação das disciplinas.
    Foram disponibilizados dois tipos de visualizações: por docente e por componente curricular.
">
    
    <link rel="stylesheet" href="http://localhost/css/app.css">
    
    <link rel="stylesheet" href="http://localhost/css/index.css">
    <link rel="stylesheet" href="http://localhost/css/sidebar.css">
    <link rel="stylesheet" href="http://localhost/css/discipline.css">
    
        <!-- Select2 -->
    <link rel="stylesheet" href="http://localhost/libs/select2/dist/css/select2.min.css">
    
    <meta name="csrf-token" content="">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </head>

<body class="content-body d-flex flex-column min-vh-100">
    <header>
    <nav class="navbar  navbar-light bg-light">

      
      <label class="label-btn">
        <i class="fas fa-bars" id='navbar_btn' onclick="move(true)"></i>
      </label>

        <a class="navbar-brand mr-0" href="http://localhost">
            <img src="http://localhost/img/imdLogo.png"  class='logo-navbar'alt="Logo do IMD">
        </a>

        <div class="" id="navbarNav">
          

          <ul class="navbar-nav ml-auto">

                                                <li class="nav-item">
                        <a class="btn btn-outline-primary" href="http://localhost/login">Entrar</a>
                    </li>
                                      </ul>
        </div>




    </nav>
</header>

    
    
    <div id="sidebar">

    <div class="d-flex align-items-center">
        <label class="">
            <i class="fas fa-bars navbar-icon" id='sidebar_btn-active' onclick="move(false)"></i>
        </label>
    </div>

    <div class="text-center">
        
        <ul class="sidebar-list">

            <li class="sidebar-item">
                <a class="list-links" href="http://localhost">Inicio</a>
            </li>

            
            <li class="sidebar-item">
                <a class="list-links" href="http://localhost/sobre">Sobre</a>
            </li>
            <li class="sidebar-item">
                <a class="list-links" href="http://localhost/colaborar">Como colaborar</a>
            </li>

            
        </ul>
    </div>
</div>

    <div class="container mb-5">
            <div class="row info-portal">
        <div class="col-md-12 mb-3">
            <h3>Taxa de Aprovação das Disciplinas</h3>
            <p class="mt-4 span-info text-justify">
                Aqui você conseguirá ver a taxa de aprovação das disciplinas.
                Foram disponibilizados dois tipos de visualizações: por docente e por componente curricular.
                <br/>
                <br/>
                Para saber mais sobre o algoritmo que gerou essas taxas,
                <a href="https://github.com/alvarofpp/analysis-ufrn">clique aqui</a>.
            </p>
        </div>
        <div class="col-md-12 mb-3">
            <h4>Visualização por Docente</h4>
            <p class="mt-4 span-info text-justify">
                Aqui você pode buscar por um docente e visualizar a sua taxa de aprovação para cada disciplina lecionada por ele.
            </p>
            <div class="row">
                <div class="col-md-12 form-group mb-2">
                    <label for="select_professor">
                        Docente
                    </label>
                    <select class="form-control select2"
                            id="select_professor" name="select_professor"></select>
                </div>
                <div class="col-md-12">
                    <table class="table text-white">
                        <thead>
                        <tr>
                            <th scope="col">Nome do componente curricular</th>
                            <th scope="col">Taxa de aprovação (%)</th>
                        </tr>
                        </thead>
                        <tbody id="tbody_professor">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <h4>Visualização por Componente Curricular</h4>
            <p class="mt-4 span-info text-justify">
                Aqui você pode buscar pelo componente curricular e visualizar a taxa de aprovação por docente que já lecionou esse componente.
            </p>
            <div class="row">
                <div class="col-md-12 form-group mb-3">
                    <label for="select_discipline">
                        Componente Curricular
                    </label>
                    <select class="form-control select2"
                            id="select_discipline" name="select_discipline"></select>
                </div>
                <div class="col-md-12">
                    <table class="table text-white">
                        <thead>
                        <tr>
                            <th scope="col">Nome do docente</th>
                            <th scope="col">Taxa de aprovação (%)</th>
                        </tr>
                        </thead>
                        <tbody id="tbody_discipline">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="mt-auto bg-dark text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        
        
        <a class="text-light" href="https://www.imd.ufrn.br/portal/">IMD - Instituto Metrópole Digital</a>
        © 2021

        
        
    </div>
    <!-- Copyright -->
</footer>
    
    <script src="http://localhost/js/app.js" type="text/javascript"></script>
    
    <script src="http://localhost/js/sidebar.js" type="text/javascript"></script>
        <!-- Select2 -->
    <script src="http://localhost/libs/select2/dist/js/select2.full.min.js"></script>

    <script>
        $('#select_professor').select2({
            placeholder: 'Selecione',
            ajax: {
                url: 'http://localhost/charts/pass_rate/select/professors',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term,
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data.data, function (item, key) {
                            return {
                                text: item,
                                id: key
                            }
                        }),
                        pagination: {
                            more: (params.page * 30) < data.total
                        }
                    };
                },
                cache: true,
                minimumInputLength: 1,
            }
        }).on('select2:select', function (e) {
            var data = e.params.data;
            const tbody = $('#tbody_professor');
            tbody.html('');

            $.get('http://localhost/charts/pass_rate/tables', {
                type: 'professor',
                id: data.id
            }, function (rows) {
                rows.forEach((element, index, array) => {
                    let rowHtml = '<tr><td>' + element.nome_componente + '</td><td>' + Number(element.taxa_aprovacao).toFixed(2) + '</td></tr>';
                    tbody.append(rowHtml);
                });
            }).fail(function (data) {
                console.log(data);
            });
        });

        $('#select_discipline').select2({
            placeholder: 'Selecione',
            ajax: {
                url: 'http://localhost/charts/pass_rate/select/disciplines',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term,
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data.data, function (item, key) {
                            return {
                                text: item,
                                id: key
                            }
                        }),
                        pagination: {
                            more: (params.page * 30) < data.total
                        }
                    };
                },
                cache: true,
                minimumInputLength: 1,
            }
        }).on('select2:select', function (e) {
            var data = e.params.data;
            const tbody = $('#tbody_discipline');
            tbody.html('');

            $.get('http://localhost/charts/pass_rate/tables', {
                type: 'discipline',
                id: data.id
            }, function (rows) {
                rows.forEach((element, index, array) => {
                    let rowHtml = '<tr><td>' + element.nome_docente + '</td><td>' + Number(element.taxa_aprovacao).toFixed(2) + '</td></tr>';
                    tbody.append(rowHtml);
                });
            }).fail(function (data) {
                console.log(data);
            });
        });
    </script>

</body>
</html>

```
<div id="execution-results-GETapi-charts-pass_rate" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-charts-pass_rate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-charts-pass_rate"></code></pre>
</div>
<div id="execution-error-GETapi-charts-pass_rate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-charts-pass_rate"></code></pre>
</div>
<form id="form-GETapi-charts-pass_rate" data-method="GET" data-path="api/charts/pass_rate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-charts-pass_rate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-charts-pass_rate" onclick="tryItOut('GETapi-charts-pass_rate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-charts-pass_rate" onclick="cancelTryOut('GETapi-charts-pass_rate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-charts-pass_rate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/charts/pass_rate</code></b>
</p>
</form>


## api/charts/pass_rate/select/professors




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/charts/pass_rate/select/professors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/charts/pass_rate/select/professors"
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


> Example response (200):

```json
{
    "current_page": 1,
    "data": {
        "345783.0": "ABMAEL BEZERRA DE OLIVEIRA",
        "1668850.0": "ABRAHAO SANDERSON NUNES FERNANDES DA SILVA",
        "1222082.0": "ADA CRISTINA SCUDELARI",
        "6345784.0": "ADAILDO GOMES D ASSUNCAO",
        "2166798.0": "ADALA NAYANA DE SOUSA MATA",
        "1267934.0": "ADALTO SOARES",
        "350751.0": "ADELARDO ADELINO DANTAS DE MEDEIROS",
        "1759777.0": "ADELENA GONCALVES MAIA",
        "1451214.0": "ADERSON FARIAS DO NASCIMENTO",
        "1561014.0": "ADILSON DE LIMA TAVARES",
        "926826.0": "ADIR LUIZ FERREIRA",
        "2451906.0": "ADJA FERREIRA DE ANDRADE",
        "1789788.0": "ADLEY ANTONINI NEVES DE LIMA",
        "1678338.0": "ADRIAN ANTONIO GARDA",
        "2323511.0": "ADRIANA AUGUSTO DE REZENDE",
        "1459400.0": "ADRIANA DA FONTE PORTO CARREIRO",
        "1549705.0": "ADRIANA FERREIRA UCHOA",
        "3322329.0": "ADRIANA ISABEL BACKES STEPPAN",
        "1549043.0": "ADRIANA MONTEIRO DE ALMEIDA",
        "1803589.0": "ADRIANA ROSA CARVALHO",
        "1296000.0": "ADRIANE CENCI",
        "1100806.0": "ADRIANNE PAULA VIEIRA DE ANDRADE",
        "1714892.0": "ADRIANO CALIMAN FERREIRA DA SILVA",
        "3490575.0": "ADRIANO CHARLES DA SILVA CRUZ",
        "1897523.0": "ADRIANO DE ARAÚJO LIMA LIGUORI",
        "1223716.0": "ADRIANO DE OLIVEIRA SOUSA",
        "1288120.0": "ADRIANO DOS SANTOS",
        "2313454.0": "ADRIANO HENRIQUE DO NASCIMENTO RANGEL",
        "1803535.0": "ADRIANO LIMA TROLEIS",
        "1350248.0": "ADRIANO LOPES GOMES"
    },
    "first_page_url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=1",
    "from": 1,
    "last_page": 59,
    "last_page_url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=59",
    "links": [
        {
            "url": null,
            "label": "&laquo; Anterior",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=2",
            "label": "2",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=3",
            "label": "3",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=4",
            "label": "4",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=5",
            "label": "5",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=6",
            "label": "6",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=7",
            "label": "7",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=8",
            "label": "8",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=9",
            "label": "9",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=10",
            "label": "10",
            "active": false
        },
        {
            "url": null,
            "label": "...",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=58",
            "label": "58",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=59",
            "label": "59",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=2",
            "label": "Próximo &raquo;",
            "active": false
        }
    ],
    "next_page_url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors?page=2",
    "path": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/professors",
    "per_page": 30,
    "prev_page_url": null,
    "to": 30,
    "total": 1742
}
```
<div id="execution-results-GETapi-charts-pass_rate-select-professors" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-charts-pass_rate-select-professors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-charts-pass_rate-select-professors"></code></pre>
</div>
<div id="execution-error-GETapi-charts-pass_rate-select-professors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-charts-pass_rate-select-professors"></code></pre>
</div>
<form id="form-GETapi-charts-pass_rate-select-professors" data-method="GET" data-path="api/charts/pass_rate/select/professors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-charts-pass_rate-select-professors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-charts-pass_rate-select-professors" onclick="tryItOut('GETapi-charts-pass_rate-select-professors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-charts-pass_rate-select-professors" onclick="cancelTryOut('GETapi-charts-pass_rate-select-professors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-charts-pass_rate-select-professors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/charts/pass_rate/select/professors</code></b>
</p>
</form>


## api/charts/pass_rate/select/disciplines




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/charts/pass_rate/select/disciplines" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/charts/pass_rate/select/disciplines"
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


> Example response (200):

```json
{
    "current_page": 1,
    "data": {
        "22810": "ACT0032 - TOXICOLOGIA",
        "25964": "ACT0033 - BIOQUIMICA CLINICA",
        "21812": "ACT0034 - IMUNOLOGIA CLINICA",
        "21810": "ACT0037 - PARASITOLOGIA CLINICA",
        "21808": "ACT0039 - MICROBIOLOGIA CLINICA",
        "21811": "ACT0043 - IMUNOHEMATOLOGIA",
        "25965": "ACT0044 - MICOLOGIA CLINICA",
        "20045": "ACT0045 - UROANALISE",
        "2048750": "ACT0049 - TOXICOLOGIA",
        "2048751": "ACT0051 - FUNDAMENTOS DE PARASITOLOGIA, MICROBIOLOGIA E IMUNOLOGIA",
        "57635": "ACT0058.0 - BIOQUÍMICA CLÍNICA - TEÓRICA",
        "57636": "ACT0058.1 - BIOQUÍMICA CLÍNICA - PRÁTICA",
        "57693": "ACT0062.0 - IMUNOLOGIA CLÍNICA - TEÓRICA",
        "57694": "ACT0062.1 - IMUNOLOGIA CLÍNICA - PRÁTICA",
        "57696": "ACT0063.0 - MICROBIOLOGIA CLÍNICA - TEÓRICA",
        "57697": "ACT0063.1 - MICROBIOLOGIA CLÍNICA - PRÁTICA",
        "57699": "ACT0064.0 - PARASITOLOGIA CLÍNICA - TEÓRICA",
        "57700": "ACT0064.1 - PARASITOLOGIA CLÍNICA - PRÁTICA",
        "62064": "ACT0065 - TECNOLOGIAS OMICAS APLICADAS A BIOENSAIOS",
        "57702": "ACT0065.0 - TOXICOLOGIA - TEÓRICA",
        "57703": "ACT0065.1 - TOXICOLOGIA - PRÁTICA",
        "62066": "ACT0067 - BIOLOGIA MOLECULAR APLICADA A INVESTIGAÇAO DE DOENÇAS CRONICAS NÃO TRANSMISSIVEIS",
        "65100": "ACT0067 - FLUIDOS BIOLÓGICOS EXTRAVASCULARES",
        "2049855": "ACT1000 - ESTÁGIO FARMACÊUTICO II",
        "53454": "ACT1990 - DIABETES E DISLIPIDEMIA",
        "53456": "ACT1992 - IMUNOLOGIA APLICADA AS ANÁLISES CLÍNICAS",
        "53457": "ACT1993 - BACTERIOLOGIA APLICADA AS ANÁLISES CLÍNICAS",
        "57632": "ACT1999 - FLUIDOS E ESPERMOGRAMA",
        "36958": "ACT2010 - TOPICOS AVANCADOS EM BIOANALISES",
        "36961": "ACT2014 - BASES BIOQUIMICAS DO DIABETES MELLITUS"
    },
    "first_page_url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=1",
    "from": 1,
    "last_page": 151,
    "last_page_url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=151",
    "links": [
        {
            "url": null,
            "label": "&laquo; Anterior",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=2",
            "label": "2",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=3",
            "label": "3",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=4",
            "label": "4",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=5",
            "label": "5",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=6",
            "label": "6",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=7",
            "label": "7",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=8",
            "label": "8",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=9",
            "label": "9",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=10",
            "label": "10",
            "active": false
        },
        {
            "url": null,
            "label": "...",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=150",
            "label": "150",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=151",
            "label": "151",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=2",
            "label": "Próximo &raquo;",
            "active": false
        }
    ],
    "next_page_url": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines?page=2",
    "path": "http:\/\/localhost\/api\/charts\/pass_rate\/select\/disciplines",
    "per_page": 30,
    "prev_page_url": null,
    "to": 30,
    "total": 4519
}
```
<div id="execution-results-GETapi-charts-pass_rate-select-disciplines" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-charts-pass_rate-select-disciplines"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-charts-pass_rate-select-disciplines"></code></pre>
</div>
<div id="execution-error-GETapi-charts-pass_rate-select-disciplines" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-charts-pass_rate-select-disciplines"></code></pre>
</div>
<form id="form-GETapi-charts-pass_rate-select-disciplines" data-method="GET" data-path="api/charts/pass_rate/select/disciplines" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-charts-pass_rate-select-disciplines', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-charts-pass_rate-select-disciplines" onclick="tryItOut('GETapi-charts-pass_rate-select-disciplines');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-charts-pass_rate-select-disciplines" onclick="cancelTryOut('GETapi-charts-pass_rate-select-disciplines');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-charts-pass_rate-select-disciplines" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/charts/pass_rate/select/disciplines</code></b>
</p>
</form>


## api/charts/pass_rate/tables




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/charts/pass_rate/tables" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/charts/pass_rate/tables"
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


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-charts-pass_rate-tables" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-charts-pass_rate-tables"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-charts-pass_rate-tables"></code></pre>
</div>
<div id="execution-error-GETapi-charts-pass_rate-tables" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-charts-pass_rate-tables"></code></pre>
</div>
<form id="form-GETapi-charts-pass_rate-tables" data-method="GET" data-path="api/charts/pass_rate/tables" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-charts-pass_rate-tables', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-charts-pass_rate-tables" onclick="tryItOut('GETapi-charts-pass_rate-tables');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-charts-pass_rate-tables" onclick="cancelTryOut('GETapi-charts-pass_rate-tables');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-charts-pass_rate-tables" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/charts/pass_rate/tables</code></b>
</p>
</form>


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>



