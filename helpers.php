<?php

function docker_secret(string $name): string
{
    return trim(file_get_contents('/run/secrets/' . $name));
}

function docker_secret_callable(string $name): Closure
{
    return function () use ($name) {
        return docker_secret($name);
    };
}
