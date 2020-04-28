# EDITAR

> ## Caso de sucesso

1. ⛔️ Recebe uma requisição do tipo **PUT** na rota **/api/personalData/id**
2. ⛔️ Verifica se é um usuario logado
3. ⛔️ Valida dados obrigatórios **name**, **email**,
4. ⛔️ Valida que o campo **email** é um e-mail válido
5. ⛔️ Valida que **password** e **passwordConfirmation** são iguais (caso o password seja editado)
6. ⛔️ Gera uma senha **criptografada** (essa senha não pode ser descriptografada)
7. ⛔️ **Salva** os dados informados, **substituindo** a senha pela senha criptorafada
8. ⛔️ Gera um **token** de acesso a partir do ID do usuário
9. ⛔️ **Atualiza** os dados do usuário com o token de acesso gerado
10. ⛔️ Retorna **200** com os novos dados atualizados

> ## Exceções

1. ⛔️ Retorna erro **404** se a API não existir
2. ⛔️ Retorna erro **403** se o usuario não estiver logado
3. ⛔️ Retorna erro **400** se **name**, **email** não forem fornecidos pelo client
4. ⛔️ Retorna erro **400** se o campo email for um e-mail inválido4.
5. ⛔️ Retorna erro **400** se password e passwordConfirmation não forem iguais (caso o password seja editado)
6. ⛔️ Retorna erro **500** se der erro ao tentar gerar uma senha criptografada
7. ⛔️ Retorna erro **500** se der erro ao tentar salvar os dados
8. ⛔️ Retorna erro **500** se der erro ao tentar gerar o token de acesso
9. ⛔️ Retorna erro **500** se der erro ao tentar criar o novo job

<!-- ✅ ⛔️ -->
