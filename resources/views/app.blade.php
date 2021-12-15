<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet"> --}}
        <title>Testing Vuetify</title>
    </head>
    <body>
        <div id="app">
            <p>@{{message}}</p>
            <v-btn elevation="2" v-on:click="reverseMessage">メッセージ反転</v-btn>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
