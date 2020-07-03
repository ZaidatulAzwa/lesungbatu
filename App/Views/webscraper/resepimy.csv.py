import csv
from bs4 import BeautifulSoup
from requests import get

url = 'https://resepi.my/category/ayam/'
response = get(url)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image = html_soup.find_all('div', class_='featured-thumbnail')
ayam = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for bahan_ayam in image :
        image_ayam = bahan_ayam.find('img')['src']
    for bahan_ayam in ayam :
        link_ayam = bahan_ayam.find('a')['href']
        title_ayam = bahan_ayam.find('a')
        print(image_ayam)
        print(link_ayam)
        print(title_ayam.text.strip())
        print()
        with open('test.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([image_ayam, title_ayam.text.strip(), link_ayam])
finally:
    csv_file.close();


url1 = 'https://resepi.my/category/daging/'
response = get(url1)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image = html_soup.find_all('div', class_='featured-thumbnail')
daging = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for bahan_daging in image :
        image_daging = bahan_daging.find('img')
    for bahan_daging in daging :
        link_daging = bahan_daging.find('a')['href']
        title_daging = bahan_daging.find('a')
        print(image_daging)
        print(link_daging)
        print(title_daging.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([image_daging, title_daging.text.strip(), link_daging])
finally:
    csv_file.close();


url2 = 'https://resepi.my/category/ikan/'
response = get(url2)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image = html_soup.find_all('div', class_='featured-thumbnail')
ikan = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for bahan_ikan in image :
        image_ikan = bahan_ikan.find('img')
    for bahan_ikan in ikan :
        link_ikan = bahan_ikan.find('a')['href']
        title_ikan = bahan_ikan.find('a')
        print(image_ikan)
        print(link_ikan)
        print(title_ikan.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([image_ikan, title_ikan.text.strip(), link_ikan])
finally:
    csv_file.close();


url3 = 'https://resepi.my/category/udang/'
response = get(url3)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image = html_soup.find_all('div', class_='featured-thumbnail')
udang = html_soup.find_all('h2',class_ = 'title front-view-title')


try:
    for bahan_udang in image :
        image_udang = bahan_udang.find('img')
    for bahan_udang in udang :
        link_udang = bahan_udang.find('a')['href']
        title_udang = bahan_udang.find('a')
        print(image_udang)
        print(link_udang)
        print(title_udang.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([image_udang, title_udang.text.strip(), link_udang])
finally:
    csv_file.close();


url4 = 'https://resepi.my/category/sotong/'
response = get(url4)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image = html_soup.find_all('div', class_='featured-thumbnail')
sotong = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for bahan_sotong in image :
        image_sotong = bahan_sotong.find('img')
    for bahan_sotong in sotong :
        link_sotong = bahan_sotong.find('a')['href']
        title_sotong = bahan_sotong.find('a')
        print(image_sotong)
        print(link_sotong)
        print(title_sotong.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([image_sotong, title_sotong.text.strip(), link_sotong])
finally:
    csv_file.close();


url5 = 'https://resepi.my/category/nasi/'
response = get(url5)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image = html_soup.find_all('div', class_='featured-thumbnail')
nasi = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for bahan_nasi in image :
        image_nasi = bahan_nasi.find('img')
    for bahan_nasi in nasi :
        link_nasi = bahan_nasi.find('a')['href']
        title_nasi = bahan_nasi.find('a')
        print(image_nasi)
        print(link_nasi)
        print(title_nasi.text.strip())
        print()
        with open('bahanmasakan.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([image_nasi, title_nasi.text.strip(), link_nasi])
finally:
    csv_file.close();
