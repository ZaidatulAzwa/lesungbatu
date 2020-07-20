import csv
from bs4 import BeautifulSoup
from requests import get

url = 'https://guardian.com.my/index.php/catalogsearch/result/?cat=&q=sensitive+skin'
response = get(url)
html_soup = BeautifulSoup(response.text, 'html.parser')
type(html_soup)
a = html_soup.find_all('a',class_ = 'product-image')
b = html_soup.find_all('div',class_ = 'details-area')
c = html_soup.find_all('p',class_ = 'old-price')
d = html_soup.find_all('p',class_ = 'special-price')


try:
    for a1 in a :
        a2 = a1.find('img')['src']
    for b1 in b :
        b2 = b1.find('h2', class_='product-name')
    for c1 in c :
        c2 = c1.find('span', class_='price')
    for d1 in d :
        d2 = d1.find('span', class_='price')
        print(a2)
        print(b2.text.strip())
        print(c2.text.strip())
        print(d2.text.strip())
        print()
        with open('z.csv', 'a', newline='') as csv_file:
            writer = csv.writer(csv_file)
            writer.writerow([a2, b2.text.strip(), c2.text.strip(), d2.text.strip()])

finally:
    csv_file.close();
