<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imitation de Visual Studio Code</title>
    <link rel="stylesheet" href="/assets/styles/vscode.css">
</head>
<body>

    <!-- Barre de menu -->
    <header>
        <div class="menu-left">
            <button class="icon">File</button>
            <button class="icon">Edit</button>
            <button class="icon">View</button>
            <button class="icon">Go</button>
            <button class="icon">Run</button>
        </div>
        <div class="menu-right">
            <button class="icon">Extensions</button>
            <button class="icon">Git</button>
        </div>
    </header>

    <!-- Barre latérale -->
    <aside class="sidebar">
        <div class="sidebar-item active">
            <span class="icon">Explorer</span>
        </div>
        <div class="sidebar-item">
            <span class="icon">Search</span>
        </div>
        <div class="sidebar-item">
            <span class="icon">Source Control</span>
        </div>
        <div class="sidebar-item">
            <span class="icon">Extensions</span>
        </div>
    </aside>

    <!-- Fenêtre de l'éditeur -->
    <main class="editor">
        <div class="editor-header">
            <span>index.html</span>
            <button class="close">X</button>
        </div>
        <div class="editor-content">
            <textarea placeholder="Commencez à coder ici..."></textarea>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="footer">
        <div class="status-bar">
            <span>Ln 1, Col 1</span>
            <span>UTF-8</span>
        </div>
    </footer>

</body>
</html>
