import csv
from bs4 import BeautifulSoup
from requests import get

url = 'https://myresipi.com/categories?page=7&sub_category=masakan_melayu'
response = get(url)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_melayu = html_soup.find_all('div',class_ = 'latest-item col-lg-6 col-md-6 col-sm-6')

try:
    for masak_melayu in masakan_melayu :
        link_melayu = masak_melayu.find('a')['href']
        title_melayu = masak_melayu.find('h2', class_='title')
        print(title_melayu.text.strip())
        print(f"https://myresipi.com{link_melayu}")
        print()
        with open('melayu.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_melayu.text.strip(), f"https://myresipi.com{link_melayu}"])
finally:
    csv_file.close()

url50 = 'https://resepi.my/?s=resepi+masakan+melayu'
response = get(url50)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_melayu1 = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for masak_melayu1 in masakan_melayu1 :
        link_melayu1 = masak_melayu1.find('a')['href']
        title_melayu1 = masak_melayu1.find('a')
        print(link_melayu1)
        print(title_melayu1.text.strip())
        print()
        with open('melayu.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_melayu1.text.strip(), link_melayu1])
finally:
    csv_file.close()

url = 'https://myresipi.com/categories?category=barat&page=4'
response = get(url)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_barat = html_soup.find_all('div',class_ = 'latest-item col-lg-6 col-md-6 col-sm-6')

try:
    for masak_barat in masakan_barat :
        link_barat = masak_barat.find('a')['href']
        title_barat = masak_barat.find('h2', class_='title')
        print(title_barat.text.strip())
        print(f"https://myresipi.com{link_barat}")
        print()
        with open('barat.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_barat.text.strip(), f"https://myresipi.com{link_barat}"])
finally:
    csv_file.close()

url51 = 'https://resepi.my/page/2/?s=resepi+masakan+barat'
response = get(url51)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_barat1 = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for masak_barat1 in masakan_barat1 :
        link_barat1 = masak_barat1.find('a')['href']
        title_barat1 = masak_barat1.find('a')
        print(link_barat1)
        print(title_barat1.text.strip())
        print()
        with open('barat.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_barat1.text.strip(), link_barat1])
finally:
    csv_file.close()

url = 'https://myresipi.com/categories?sub_category=masakan_thai'
response = get(url)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_thai = html_soup.find_all('div',class_ = 'latest-item col-lg-6 col-md-6 col-sm-6')

try:
    for masak_thai in masakan_thai :
        link_thai = masak_thai.find('a')['href']
        title_thai = masak_thai.find('h2', class_='title')
        print(title_thai.text.strip())
        print(f"https://myresipi.com{link_thai}")
        print()
        with open('thai.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_thai.text.strip(), f"https://myresipi.com{link_thai}"])
finally:
    csv_file.close()

url52 = 'https://resepi.my/page/6/?s=resepi+masakan+thai'
response = get(url52)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_thai1 = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for masak_thai1 in masakan_thai1 :
        link_thai1 = masak_thai1.find('a')['href']
        title_thai1 = masak_thai1.find('a')
        print(link_thai1)
        print(title_thai1.text.strip())
        print()
        with open('thai.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_thai1.text.strip(), link_thai1])
finally:
    csv_file.close()

url = 'https://myresipi.com/categories?page=2&sub_category=masakan_cina'
response = get(url)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_cina = html_soup.find_all('div',class_ = 'latest-item col-lg-6 col-md-6 col-sm-6')

try:
    for masak_cina in masakan_cina :
        link_cina = masak_cina.find('a')['href']
        title_cina = masak_cina.find('h2', class_='title')
        print(title_cina.text.strip())
        print(f"https://myresipi.com{link_cina}")
        print()
        with open('cina.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_cina.text.strip(), f"https://myresipi.com{link_cina}"])
finally:
    csv_file.close()

url53 = 'https://resepi.my/?s=resepi+masakan+cina'
response = get(url53)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_cina1 = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for masak_cina1 in masakan_cina1 :
        link_cina1 = masak_cina1.find('a')['href']
        title_cina1 = masak_cina1.find('a')
        print(link_cina1)
        print(title_cina1.text.strip())
        print()
        with open('cina.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_cina1.text.strip(), link_cina1])
finally:
    csv_file.close()

url = 'https://myresipi.com/categories?page=2&sub_category=masakan_india'
response = get(url)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_india = html_soup.find_all('div',class_ = 'latest-item col-lg-6 col-md-6 col-sm-6')

try:
    for masak_india in masakan_india :
        link_india = masak_india.find('a')['href']
        title_india = masak_india.find('h2', class_='title')
        print(title_india.text.strip())
        print(f"https://myresipi.com{link_india}")
        print()
        with open('india.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_india.text.strip(), f"https://myresipi.com{link_india}"])
finally:
    csv_file.close()

url54 = 'https://resepi.my/?s=resepi+masakan+india'
response = get(url54)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
masakan_india1 = html_soup.find_all('h2',class_ = 'title front-view-title')

try:
    for masak_india1 in masakan_india1 :
        link_india1 = masak_india1.find('a')['href']
        title_india1 = masak_india1.find('a')
        print(link_india1)
        print(title_india1.text.strip())
        print()
        with open('india.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([title_india1.text.strip(), link_india1])
finally:
    csv_file.close()
