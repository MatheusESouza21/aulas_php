from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

# Configuração do driver (certifique-se de que o chromedriver está no PATH)
driver = webdriver.Chrome()

try:
    # 1. Abre a página de cadastro de funcionário
    driver.get("http://localhost:8080/php_matheus_eduardo/aulas_php/projeto-crud-imagens/criar.php")

    # 2. Aguarda os campos aparecerem e preenche os dados do funcionário
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "nome"))).send_keys("Larah")
    driver.find_element(By.ID, "cargo").send_keys("Programador")

    # 3. Aguarda o campo de upload de imagem aparecer e faz o upload
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "image"))).send_keys("C:/Users/matheus_souza151/Downloads/cat02.jpeg")  # Substitua pelo caminho real da imagem

    # 4. Aguarda o botão aparecer e clica no botão de cadastro
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "botao"))).click()
    time.sleep(2)  # pequena pausa para evitar conflito

    # 5. Vai para a página de listagem de funcionários
    driver.get("http://localhost:8080/php_matheus_eduardo/aulas_php/projeto-crud-imagens/ler.php")

    # Debug: imprime o HTML carregado para confirmar se existe uma tabela
    print("\n======= HTML da página de listagem (ler.php) =======")
    print(driver.page_source[:1000])  # imprime só os primeiros 1000 caracteres para não lotar o terminal
    print("===================================================\n")

    # 6. Aguarda a tabela aparecer (se realmente existir)
    tabela = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.TAG_NAME, "table"))
    )

    # 7. Verifica se os dados cadastrados aparecem na tabela
    linhas = tabela.find_elements(By.TAG_NAME, "tr")  # Obtém todas as linhas da tabela
    dados_encontrados = False

    for linha in linhas[1:]:  # Ignora o cabeçalho (primeira linha)
        colunas = linha.find_elements(By.TAG_NAME, "td")
        if len(colunas) > 0:
            nome = colunas[1].text  # Segunda coluna: Nome
            cargo = colunas[2].text  # Terceira coluna: Cargo
            if nome == "Larah" and cargo == "Programador":
                dados_encontrados = True
                break

    if dados_encontrados:
        print("✅ Teste de cadastro de funcionário: SUCESSO!")
    else:
        print("❌ Teste de cadastro de funcionário: FALHA!")

except Exception as e:
    print(f"❌ Ocorreu um erro: {e}")

finally:
    # Fecha o navegador
    driver.quit()