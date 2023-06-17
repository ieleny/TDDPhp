# TDD
Estudo na utilização do desenvolvimento em TDD(TEST DRIVEN DEVELOPMENT), sendo que o objetivo dessa técnica é fazer o teste, 
antes de desenvolver os códigos de aplicação.

# Objetivo
Aonde o objetivo era prever os erros de uma casa de apostas. Utilizando o framework de testes PHPUNIT.

# Como funciona

Primeiro Passo:
	Escrever o código que será o teste com o resultado da função, sendo que será preciso especificar a entrada e saida
	do código que será testado.     

Segundo Passo:
	Desenvolva o pedaço do código da aplicação, e teste (Dependo pode ser Unítários, Integração ou de Sistemas).

Terceiro Passo:
	Crie um teste que você tem certeza que irá falhar, e veja quais os erros que o mesmo apresenta. E com esses erros
	você irá criar tratamentos e execções.
	
Quarto Passo:
	Agora, pegue os erros trate e testes novamente. Mais dessa vez crie funções de teste que irá funcionar. 
	
Quinto Passo:
	Verifique se os teste que você criou, não está impactando os outros teste.
	
Sexto Passo:
	Refatore seu código. E comece tudo de novo.

# Executar comandos docker

Entrar na pasta docker e executar

```
	docker compose up
```

# Executando o php-unit no docker

Comando para saber qual os container executados
```
	docker ps
```

Comando para entrar no bash da imagem do docker-php-fpm
```
	docker exec -it <CONTAINER-ID> bash
```

Quando acessar o bash, o servidor estará na pasta 'var/app/html'. 

Assim poderá installar o composer
```
	composer install
```
	
Para executar os testes no php unit é preciso executar o seguinte comando:
```
	./vendor/bin/phpunit --verbose src/Tests/UsuarioTeste.php
```


