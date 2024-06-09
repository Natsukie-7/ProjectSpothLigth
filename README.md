# Instruções de Configuração

Para iniciar o servidor, siga estas etapas:

1. Certifique-se de estar na pasta raiz do projeto.
2. Verifique se o Composer está instalado na sua máquina.
3. Execute os seguintes comandos no terminal:

    ```bash
    composer install
    composer du
    composer run server
    ```

Isso iniciará o servidor.

### Configuração do Arquivo de Ambiente (.env)

Por motivos de segurança, siga estas etapas após baixar este repositório:

1. Localize o arquivo `.env.example` na pasta raiz.
2. Faça uma cópia deste arquivo e renomeie-o para `.env`.
3. Dentro do arquivo `.env`, configure as variáveis de ambiente conforme necessário para o seu ambiente de desenvolvimento ou produção.

**Nota:** Certifique-se de não compartilhar informações sensíveis, como chaves de API ou credenciais de banco de dados.

**Nota:** Para garantir a funcionalidade ideal do projeto, é recomendável ajustar o limite de tamanho de upload do PHP. Siga estes passos:

1. No terminal, digite o comando `php --ini` e localize a linha "Loaded Configuration File:" para identificar o local do arquivo `php.ini`.
2. No arquivo identificado, ajuste as configurações `upload_max_filesize` para `256M` e `post_max_size` para `512M`.
   - No Linux, talvez seja necessário conceder permissões de escrita ao arquivo `php.ini`. Para isso, execute `sudo chmod 777 php.ini` no diretório onde o arquivo `php.ini` está localizado.

Além disso, para garantir que seu banco de dados possa armazenar os dados adequadamente, execute o seguinte comando SQL: SET GLOBAL max_allowed_packet=67108864;

---

**Repositórios Usados:**
    - [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)

Se precisar de mais ajuda ou encontrar problemas durante a configuração, sinta-se à vontade para entrar em contato ou abrir uma issue. Estamos aqui para ajudar!
