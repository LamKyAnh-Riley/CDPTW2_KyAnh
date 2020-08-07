<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-M15">
    <main class="main main-inner bg-breadcrumb slider" data-stellar-background-ratio="0.6">
        <div class="container">
            <header class="main-header">
                <h1>BLOG - LIST</h1>
                <h4 class="desc"></h4>
            </header>

            <ol class="breadcrumb">
                <li class="white"><a href="#" class="white pathway">Home</a></li>
                <li class="white"><a href="#" class="white pathway">Blog</a></li>
                <li class="active white">Blog - List</li>
            </ol>
        </div>
    </main>
</div>
