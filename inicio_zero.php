<!DOCTYPE html>
<html>
<head>
	<title>inicio github</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Início - projeto do zero</h3>
	<hr/>
	<ul>
		<li>Baixar e instalar o GIT que se encontra no link <a href="https://git-scm.com">Aqui</a></li>
		<li>Criar conta no github ou logar na sua conta já criada - <a href="https://github.com">Link</a></li>
		<li>Uma vez logado, vamos criar um novo repositório clicando em <b>"New repository"</b></li>
		<li>Coloque um nome para o repositório, uma descrição e marque a opção para criar o arquivo README</li>
		<li>Crie uma pasta para seu projeto (no htdocs caso use xampp)</li>
		<li>Abra o "terminal" do GIT e navegue até o diretório da pasta do projeto</li>
		<li>Uma vez na pasta (ex: /c/xamppR/htdocs/git) <small>obs: a pasta precisa estar vazia</small></li>
		<li>Execute o comando <b>git init</b> para criar um repositório local</li>
		<li>Acesse seu projeto no github, clique em "clone or download" e copie o link que avi aparecer</li>
		<li>Para vincular com seu repositório remoto (online) execute no terminal do GIT o comando abaixo</li>
		<li><b>git remote add origin [link copiado]</b> e aperte "enter"</li>
		<li>execute o comando <b>git remote</b> deverá aparecer a palavra "origin"</li>
		<li>Para verificar se você está no projeto correto execute <b>git remote -v</b> que irá aparecer o link do projeto</li>
		<li>Para puxar os arquivos remotos e sincronizar os repositórios execute o comando abaixo</li>
		<li><b>git pull origin master</b> e assim você terá os arquivos sincronizados na sua pasta do projeto</li>
		<li>aqui pulamos para a parte de comandos básicos</li>
	</ul>
</body>
</html>