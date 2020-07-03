# import csv
from bs4 import BeautifulSoup
from requests import get

url12 = 'https://myresipi.com/'
response = get(url12)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
image6 = html_soup.find_all('div', class_="gsc-wrapper")
for bahan6 in image6:
    image_ayam = bahan6.find('div', class_='gs-image-box gs-web-image-box gs-web-image-box-landscape')

ayam2 = html_soup.find_all('div',class_ = 'gs-title')
for bahan_ayam2 in ayam2 :
        title_ayam = bahan_ayam2.find('a')['href']
        print(image_ayam)
        print(title_ayam)
        print()
