import csv
from bs4 import BeautifulSoup
from requests import get

url6 = 'https://resepichenom.com/kategori/ayam/show'
response = get(url6)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image1 = html_soup.find_all('div', class_='card align-items-center mb-0')
link = html_soup.find_all('div', class_='card-block mb-0')

try:

    for bahan_ayam1 in image1 :
        image_ayam1 = bahan_ayam1.find('img')['src']
    for bahan_ayam1 in link :
        link_ayam1 = bahan_ayam1.find('a')['href']
        title_ayam1 = bahan_ayam1.find('a')
        # print(image_ayam1)
        # print(f"https://resepichenom.com{link_ayam1}")
        # print(title_ayam1.text.strip())
        # print()
        with open('test.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([image_ayam1, title_ayam1.text.strip(), f"https://resepichenom.com{link_ayam1}"])
finally:
    csv_file.close();


url7 = 'https://resepichenom.com/kategori/daging/show'
response = get(url7)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image1 = html_soup.find_all('div', class_='card align-items-center mb-0')
link1 = html_soup.find_all('div', class_='card-block mb-0')

try:

    for bahan_daging1 in image1 :
        image_daging1 = bahan_daging1.find('img')['src']
    for bahan_daging1 in link1 :
        link_daging1 = bahan_daging1.find('a')['href']
        title_daging1 = bahan_daging1.find('a')
        print(image_daging1)
        print(f"https://resepichenom.com{link_daging1}")
        print(title_daging1.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([image_daging1, title_daging1.text.strip(), f"https://resepichenom.com{link_daging1}"])
finally:
    csv_file.close();


url8 = 'https://resepichenom.com/kategori/ikan/show'
response = get(url8)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
link2= html_soup.find_all('div', class_='card-block mb-0')

try:

    for bahan_ikan1 in link2 :
        link_ikan1 = bahan_ikan1.find('a')['href']
        title_ikan1 = bahan_ikan1.find('a')
        print(f"https://resepichenom.com{link_ikan1}")
        print(title_ikan1.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_ikan1.text.strip(), f"https://resepichenom.com{link_ikan1}"])
finally:
    csv_file.close();


url9 = 'https://resepichenom.com/kategori/Seafood/show'
response = get(url9)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
link3 = html_soup.find_all('div', class_='card-block mb-0')

try:

    for bahan_udang1 in link3 :
        link_udang1 = bahan_udang1.find('a')['href']
        title_udang1 = bahan_udang1.find('a')
        print(f"https://resepichenom.com{link_udang1}")
        print(title_udang1.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_udang1.text.strip(), f"https://resepichenom.com{link_udang1}"])
finally:
    csv_file.close();


# url10 = 'https://resepichenom.com/resepi/search/result?q=sotong'
# response = get(url10)
# html_soup = BeautifulSoup(response.text, 'html.parser')
# type(html_soup)
# link4 = html_soup.find_all('div', class_='card-block mb-0')
#
# try:
#
#     for bahan_sotong1 in link4 :
#         link_sotong1 = bahan_sotong1.find('a')['href']
#         title_sotong1 = bahan_sotong1.find('a')
#         print(f"resepichenom.com{link_sotong1}")
#         print(title_sotong1.text.strip())
#         print()
#         with open('bahanmasakan.csv', 'a', newline='') as csv_file:
#             writer = csv.writer(csv_file)
#             writer.writerow([title_sotong1.text.strip(), f"resepichenom.com{link_sotong1}"])
# finally:
#     csv_file.close();


url11 = 'https://resepichenom.com/kategori/nasi/show'
response = get(url11)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
link5 = html_soup.find_all('div', class_='card-block mb-0')

try:

    for bahan_nasi1 in link5 :
        link_nasi1 = bahan_nasi1.find('a')['href']
        title_nasi1 = bahan_nasi1.find('a')
        print(f"https://resepichenom.com{link_nasi1}")
        print(title_nasi1.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_nasi1.text.strip(), f"https://resepichenom.com{link_nasi1}"])
finally:
    csv_file.close();
