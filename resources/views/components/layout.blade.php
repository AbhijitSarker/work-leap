</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="from-10% via-30% to-90% mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-100 via-sky-100 to-emerald-100 text-slate-700">    
    {{ auth()->user()->name ?? 'Guest' }}
    {{ $slot }}
</body>

</html>