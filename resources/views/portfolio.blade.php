<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $nama }} | Portofolio</title>
    <meta name="description" content="{{ $peran }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;700;800&family=Figtree:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --paper: #F4F6F8;
            --ink: #121A24;
            --muted: #556070;
            --line: #D5DBE3;
            --blue: #2447F5;
            --code: #0F1722;
            --code-text: #D6DEEA;
            --code-key: #8FB4FF;
            --code-str: #9BE3B5;
            --code-dim: #6B7A8F;
            --display: "Bricolage Grotesque", "Segoe UI", system-ui, sans-serif;
            --body: "Figtree", "Segoe UI", system-ui, sans-serif;
            --mono: "IBM Plex Mono", Consolas, "Courier New", monospace;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            background: var(--paper);
            color: var(--ink);
            font-family: var(--body);
            font-size: 1.0625rem;
            line-height: 1.65;
        }
        a { color: var(--blue); text-underline-offset: 3px; }
        a:focus-visible { outline: 3px solid var(--blue); outline-offset: 3px; border-radius: 2px; }
        .wrap { width: min(1080px, 100% - 2.5rem); margin-inline: auto; }

        header.top { padding: 1.25rem 0; }
        header.top .wrap { display: flex; justify-content: space-between; align-items: center; gap: 1rem; flex-wrap: wrap; }
        .brand { font-family: var(--display); font-weight: 700; color: var(--ink); text-decoration: none; }
        nav { display: flex; gap: 1.25rem; }
        nav a { color: var(--muted); text-decoration: none; font-weight: 500; }
        nav a:hover { color: var(--blue); }

        .hero { padding: 3rem 0 4.5rem; }
        .hero .wrap { display: grid; grid-template-columns: 1.05fr .95fr; gap: 3rem; align-items: center; }
        h1 {
            font-family: var(--display);
            font-weight: 800;
            font-size: clamp(2.6rem, 6.5vw, 4.75rem);
            line-height: 1.02;
            letter-spacing: -0.02em;
            margin: 0 0 1.25rem;
        }
        .foto {
            display: block;
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid var(--ink);
            margin-bottom: 1.5rem;
        }
        .peran { font-size: 1.25rem; color: var(--muted); max-width: 30ch; margin: 0 0 2rem; }
        .btns { display: flex; gap: .75rem; flex-wrap: wrap; }
        .btn {
            display: inline-block;
            padding: .7rem 1.25rem;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            border: 2px solid var(--ink);
        }
        .btn.main { background: var(--ink); color: var(--paper); }
        .btn.main:hover { background: var(--blue); border-color: var(--blue); }
        .btn.alt { color: var(--ink); }
        .btn.alt:hover { border-color: var(--blue); color: var(--blue); }

        .term {
            background: #050A07;
            color: #4DFF88;
            border: 1px solid #14301F;
            border-radius: 10px;
            font-family: var(--mono);
            font-size: .9rem;
            line-height: 1.75;
            box-shadow: 8px 8px 0 var(--blue);
            overflow: hidden;
        }
        .term-bar {
            padding: .6rem 1.1rem;
            background: #0B1A11;
            border-bottom: 1px solid #14301F;
            color: #5FBF84;
            font-size: .8rem;
        }
        .term-body { padding: 1.25rem 1.25rem 1.5rem; min-height: 19rem; overflow-x: auto; }
        .term-line { white-space: pre-wrap; word-break: break-word; }
        .term-line .p { color: #7CFFB0; }
        .term-line.out { color: #A9E8C0; }
        .cursor {
            display: inline-block;
            width: .6em;
            height: 1.05em;
            margin-left: 2px;
            vertical-align: text-bottom;
            background: #4DFF88;
            animation: kedip 1s steps(1) infinite;
        }
        @keyframes kedip { 50% { opacity: 0; } }
        @media (prefers-reduced-motion: reduce) { .cursor { animation: none; } }

        section { padding: 3.5rem 0; border-top: 1px solid var(--line); }
        h2 {
            font-family: var(--display);
            font-weight: 700;
            font-size: clamp(1.7rem, 3.5vw, 2.25rem);
            letter-spacing: -0.01em;
            margin: 0 0 1.5rem;
        }
        .cols { display: grid; grid-template-columns: 1fr 2fr; gap: 2rem; }
        .cols h2 { margin: 0; }
        .about { max-width: 62ch; margin: 0; font-size: 1.15rem; }

        .list { list-style: none; margin: 0; padding: 0; }
        .list li { padding: 1.1rem 0; border-bottom: 1px solid var(--line); display: grid; grid-template-columns: 11rem 1fr; gap: 1rem; }
        .list li:first-child { padding-top: 0; }
        .list strong { font-family: var(--display); font-size: 1.2rem; }
        .list p { margin: 0; color: var(--muted); max-width: 55ch; }

        .proyek h3 { font-family: var(--display); font-size: 1.3rem; margin: 0 0 .35rem; }
        .proyek p { margin: 0 0 .6rem; color: var(--muted); max-width: 55ch; }
        .proyek + .proyek { margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--line); }

        footer { padding: 2rem 0 3rem; border-top: 1px solid var(--line); color: var(--muted); font-size: .95rem; }

        @media (max-width: 800px) {
            .hero .wrap, .cols { grid-template-columns: 1fr; }
            .hero { padding-top: 1.5rem; }
            .list li { grid-template-columns: 1fr; gap: .25rem; }
            .term { box-shadow: 5px 5px 0 var(--blue); }
        }
    </style>
</head>
<body>
    <header class="top">
        <div class="wrap">
            <a class="brand" href="#atas">{{ $nama }}</a>
            <nav aria-label="Navigasi utama">
                <a href="#tentang">Tentang</a>
                <a href="#skill">Skill</a>
                <a href="#proyek">Proyek</a>
                <a href="#kontak">Kontak</a>
            </nav>
        </div>
    </header>

    <main id="atas">
        <div class="hero">
            <div class="wrap">
                <div>
                    @if (!empty($foto))
                        <img class="foto" src="{{ asset($foto) }}" alt="Foto {{ $nama }}" width="140" height="140">
                    @endif
                    <h1>{{ $nama }}</h1>
                    <p class="peran">{{ $peran }}</p>
                    <div class="btns">
                        <a class="btn main" href="#proyek">Lihat proyek</a>
                        <a class="btn alt" href="#kontak">Hubungi saya</a>
                    </div>
                </div>

                <div class="term" role="img" aria-label="Terminal yang menampilkan ringkasan profil">
                    <div class="term-bar" aria-hidden="true">bowo&#64;portofolio:~</div>
                    <div class="term-body" id="term" aria-hidden="true"></div>
                </div>
            </div>
        </div>

        <section id="tentang">
            <div class="wrap cols">
                <h2>Tentang saya</h2>
                <p class="about">{{ $ringkasan }}</p>
            </div>
        </section>

        <section id="skill">
            <div class="wrap cols">
                <h2>Skill</h2>
                <ul class="list">
                    @foreach ($skills as $skill)
                        <li>
                            <strong>{{ $skill['nama'] }}</strong>
                            <p>{{ $skill['ket'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section id="proyek">
            <div class="wrap cols">
                <h2>Proyek</h2>
                <div>
                    @foreach ($proyek as $p)
                        <article class="proyek">
                            <h3>{{ $p['nama'] }}</h3>
                            <p>{{ $p['ket'] }}</p>
                            @if (!empty($p['tautan']))
                                <a href="{{ $p['tautan'] }}" target="_blank" rel="noopener">{{ $p['teks_tautan'] ?? 'Buka proyek' }}</a>
                            @endif
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="kontak">
            <div class="wrap cols">
                <h2>Kontak</h2>
                <ul class="list">
                    @foreach ($kontak as $k)
                        <li>
                            <strong>{{ $k['label'] }}</strong>
                            <p><a href="{{ $k['url'] }}" target="_blank" rel="noopener">{{ $k['teks'] }}</a></p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>

    <footer>
        <div class="wrap">&copy; {{ date('Y') }} {{ $nama }}. Dibuat dengan Laravel.</div>
    </footer>
    <script>
        (function () {
            var el = document.getElementById('term');
            if (!el) return;

            var langkah = [
                { cmd: 'whoami', out: [@json($nama)] },
                { cmd: 'cat status.txt', out: ['Mahasiswa Ilmu Komputer'] },
                { cmd: 'echo $TUJUAN', out: ['Web developer'] },
                { cmd: 'ls stack/', out: [@json(collect($skills)->pluck('nama')->implode('   '))] },
                { cmd: 'php artisan serve', out: ['Server berjalan. Selamat datang!'] }
            ];

            var kursor = document.createElement('span');
            kursor.className = 'cursor';
            var diam = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function baris(kelas, prompt) {
                var d = document.createElement('div');
                d.className = 'term-line' + (kelas ? ' ' + kelas : '');
                if (prompt) {
                    var p = document.createElement('span');
                    p.className = 'p';
                    p.textContent = '$ ';
                    d.appendChild(p);
                }
                el.appendChild(d);
                return d;
            }

            function tampilSemua() {
                langkah.forEach(function (l) {
                    var c = baris('', true);
                    c.appendChild(document.createTextNode(l.cmd));
                    l.out.forEach(function (o) { baris('out').textContent = o; });
                });
                var akhir = baris('', true);
                akhir.appendChild(kursor);
            }

            function ketik(teks, tujuan, selesai) {
                var i = 0;
                (function maju() {
                    if (i < teks.length) {
                        tujuan.insertBefore(document.createTextNode(teks.charAt(i++)), kursor);
                        setTimeout(maju, 5 + Math.random() * 60);
                    } else {
                        selesai();
                    }
                })();
            }

            function jalan(n) {
                if (n >= langkah.length) {
                    baris('', true).appendChild(kursor);
                    setTimeout(function () { el.innerHTML = ''; jalan(0); }, 4000);
                    return;
                }
                var l = langkah[n];
                var c = baris('', true);
                c.appendChild(kursor);
                ketik(l.cmd, c, function () {
                    setTimeout(function () {
                        l.out.forEach(function (o) { baris('out').textContent = o; });
                        setTimeout(function () { jalan(n + 1); }, 450);
                    }, 350);
                });
            }

            if (diam) { tampilSemua(); } else { jalan(0); }
        })();
    </script>
</body>
</html>
