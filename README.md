# WallacePOS (sistema da loja da SAPN)

WallacePOS usa o poder da web moderna para fornecer um sistema de vendas fácil de usar e extensível.

Utilizado nas lojas da SAPN e do GVEN

## Pré-requisitos do servidor

O sistema requer:

1. Um servidor Lamp com versão PHP>=5.4, extensões PHP cURL e GD e versão Apache>=2.4.7 com módulos reescritos, proxy_http e proxy_wstunnel.

     - Você pode habilitar os módulos digitando o seguinte em seu terminal

     ```
         sudo a2enmod proxy_http proxy_wstunnel reescrever
         sudo apt-get install php5-curl php5-gd
         sudo serviço apache2 reiniciar
     ```

     - O seguinte trecho de host virtual em sua configuração do Apache, substitua %*% por seus valores e modifique de acordo com suas necessidades.


     ```
         <HostVirtual *:443>
              DocumentRoot %/seu_diretório_de_instalação%
              Nome do servidor% seu.servidor.fqdn%

              Log de erros ${APACHE_LOG_DIR}/error.log
              CustomLog ${APACHE_LOG_DIR}/access.log combinado

              Motor SSL ativado
                  SSLCipherSuite !ADH:!DSS:!RC4:HIGH:+3DES:+RC4
                  Protocolo SSL tudo -SSLv2 -SSLv3
                  SSLCertificateFile %certificate_location%
                  SSLCertificateKeyFile %key_location%
                  SSLCertificateChainFile %cert_chain_location%

              <Diretório %/your_install_dir%>
                 Permitir substituir tudo
              </Diretório>

              #WSPROXYCONF
              Solicitações de proxy desativadas
              ProxyPreserveHost ativado
              <Proxy *>
                      Ordem negar, permitir
                      Permitir de todos
              </Proxy>
              RewriteEngine ativado
              Atualização RewriteCond %{HTTP:Connection} [NC]
              RewriteRule /(.*) ws://localhost:8080/$1 [P,L]
              ProxyPass /socket.io http://localhost:8080/socket.io/
              ProxyPassReverse /socket.io http://localhost:8080/socket.io/
              <Local /socket.io>
                      Ordem permitir, negar
                      Permitir de todos
              </Local>
         </VirtualHost>
     ```

     Nota: Usar http simples não é recomendado.

2. Node.js instalado junto com a biblioteca socket.io

     Para uma distribuição Debian:

     ```
         sudo apt-get atualização
         sudo apt-get install nodejs && apt-get install npm
         cd %/seu_diretório_de_instalação%/api
         sudo npm instalar soquete.io
     ```

## Instalação e inicialização

1. Clone a versão mais recente do sistema em %your_install_dir%, caso ainda não tenha feito isso.
    O diretório de instalação deve ser o diretório raiz do seu documento Apache!
   
2. Execute `composer install` em seu diretório de instalação para atualizar as dependências do PHP (talvez seja necessário instalar o compositor primeiro).

3. Visite /installer no seu navegador e siga o assistente de instalação.

4. Faça login no painel de administração em /admin, no menu vá para Configurações -> Utilitários e certifique-se de que o servidor de feed foi iniciado com sucesso.
