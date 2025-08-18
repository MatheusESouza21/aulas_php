from selenium import webdriver
from selenium.webdriver.common.by import By
import time

# Inicia o serviço do ChromeDriver
service = webdriver.ChromeService(executable_path='http://localhost:8080/php_matheus_eduardo/aulas_php/conex%c3%a3o/PDO/inserirCliente.php')
driver = webdriver.Chrome(service=service)

try:
    # 1. Abre a página do aplicativo de estoque
    driver.get("http://localhost:8080/php_matheus_eduardo/aulas_php/conex%c3%a3o/PDO/inserirCliente.php")

    # 2. Encontra os campos de input e preenche com os dados do produto
    campo_nome = driver.find_element(By.ID, "nome")
    campo_endereco = driver.find_element(By.ID, "endereco")
    campo_telefone = driver.find_element(By.ID, "telefone")
    campo_email = driver.find_element(By.ID, "email")
    botao_cadastro = driver.find_element(By.ID, "botao")

    campo_nome.send_keys("Larah")
    campo_endereco.send_keys("João Costa")
    campo_telefone.send_keys("123456789")
    campo_email.send_keys("larah@gmail.com")

    # 3. Clica no botão para adicionar
    botao_cadastro.click()
    time.sleep(2) # Pausa para a página atualizar

    # 4. Validação: Verifica se o novo produto está na tabela
    tabela = driver.find_element(By.ID, "id-da-tabela")
    if "Laptop Gamer" in tabela.text and "5" in tabela.text and "7500.00" in tabela.text:
        print("✅ Teste de cadastro de produto: SUCESSO!")
    else:
        print("❌ Teste de cadastro de produto: FALHA!")

finally:
    # Fecha o navegador
    driver.quit()
