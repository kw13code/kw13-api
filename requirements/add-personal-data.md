# Cadastro

> ## Caso de sucesso

1. ⛔️ Recebe uma requisição do tipo **POST** na rota **/api/personal-data**
2. ⛔️ Verifica se o usuário esta logado
3. ⛔️ Valida dados obrigatórios **name**, **email**, **password**
4. ⛔️ **Valida** se já existe um usuario com o mesmo email
5. ⛔️ Retorna **204**

> ## Exceções

1. ⛔️ Retorna erro **404** se a API não existir
2. ⛔️ Retorna erro **403** se o usuário não estiver logado
3. ⛔️ Retorna erro **400** se **name**, **email** ou **password** não forem fornecidos
4. ⛔️ Retorna erro **403** se o email fornecida já estiver em uso
5. ⛔️ Retorna erro **500** se der erro ao tentar criar o novo usuario

<!-- ✅ ⛔️ -->
