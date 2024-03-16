<?php

class HTMLPage {

    public function getHeader($title) {
        return '<!DOCTYPE html>
        <html lang="de">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>coffeenerd - fairer kaffee - '.$title.'</title>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <header>
                <div id="logo">
                    <img src="img/coffeenerd.jpg" alt="logo">
                </div>
                <div id="brand">
                    coffeenerd
                    <small>fairer kaffee</small>
                </div>
            </header>
            <section class="container">';
    }

    public function getFooter() {
        return '<aside id="sidebar">
                    <article class="sidebararticle">
                        <h1>Neu im Sortiment</h1>
                        <p><img src="img/kaffee6.jpg" alt="Kaffa Kaffee"></p>
                        <h2>Kaffa Kaffee</h2>
                        <p>Fair, organisch, bio.</p>
                        <p>Demnächst im Shop</p>
                    </article>
                    <article class="sidebararticle">
                        <h1>Ihre Vorteile</h1>
                        <ul>
                            <li>15 Jahre online Erfahrung</li>
                            <li>Kostenloser Versand</li>
                            <li>24h Support Hotline</li>
                            <li>Jede Mengeneinheit lieferbar</li>
                        </ul>
                    </article>
                </aside>
            </section>
            </body>
            </html>';
    }

}