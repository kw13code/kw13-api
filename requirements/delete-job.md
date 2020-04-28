# DELETE JOB

> ## Caso de sucesso

1. ⛔️ Recebe uma requisição do tipo **DELETE** na rota **/api/jobs/jobId**
2. ⛔️ Verifica se é um usuario logado
3. ⛔️ Retorna **200**

> ## Exceções

1. ⛔️ Retorna erro **404** se a API não existir
2. ⛔️ Retorna erro **403** se o usuario não estiver logado
3. ⛔️ Retorna erro **500** se der erro ao tentar criar o novo job

<!-- ✅ ⛔️ -->
