from bs4 import BeautifulSoup
from requests import get
import mysql.connector

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url = 'https://resepi.my/category/ayam/'
    response = get(url)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    ayam = html_soup.find_all('h2',class_ = 'title front-view-title')

    try:
        for bahan_ayam in ayam :
            link_ayam = bahan_ayam.find('a')['href']
            title_ayam = bahan_ayam.find('a')

            recipe_arr.append((title_ayam.text.strip(), link_ayam))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url6 = 'https://resepichenom.com/kategori/ayam/show'
    response = get(url6)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    link = html_soup.find_all('div', class_='card-block mb-0')

    try:
        for bahan_ayam1 in link :
            link_ayam1 = bahan_ayam1.find('a')['href']
            title_ayam1 = bahan_ayam1.find('a')

            recipe_arr.append((title_ayam1.text.strip(), f"https://resepichenom.com{link_ayam1}"))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url1 = 'https://resepi.my/category/daging/'
    response = get(url1)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    daging = html_soup.find_all('h2',class_ = 'title front-view-title')

    try:
        for bahan_daging in daging :
            link_daging = bahan_daging.find('a')['href']
            title_daging = bahan_daging.find('a')

            recipe_arr.append((title_daging.text.strip(), link_daging))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url7 = 'https://resepichenom.com/kategori/daging/show'
    response = get(url7)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    link1 = html_soup.find_all('div', class_='card-block mb-0')

    try:
        for bahan_daging1 in link1 :
            link_daging1 = bahan_daging1.find('a')['href']
            title_daging1 = bahan_daging1.find('a')

            recipe_arr.append((title_daging1.text.strip(), f"https://resepichenom.com{link_daging1}"))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url2 = 'https://resepi.my/category/ikan/'
    response = get(url2)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    ikan = html_soup.find_all('h2',class_ = 'title front-view-title')

    try:
        for bahan_ikan in ikan :
            link_ikan = bahan_ikan.find('a')['href']
            title_ikan = bahan_ikan.find('a')

            recipe_arr.append((title_ikan.text.strip(), link_ikan))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url8 = 'https://resepichenom.com/kategori/ikan/show'
    response = get(url8)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    link2= html_soup.find_all('div', class_='card-block mb-0')

    try:
        for bahan_ikan1 in link2 :
            link_ikan1 = bahan_ikan1.find('a')['href']
            title_ikan1 = bahan_ikan1.find('a')

            recipe_arr.append((title_ikan1.text.strip(), f"https://resepichenom.com{link_ikan1}"))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url3 = 'https://resepi.my/category/udang/'
    response = get(url3)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    udang = html_soup.find_all('h2',class_ = 'title front-view-title')

    try:
        for bahan_udang in udang :
            link_udang = bahan_udang.find('a')['href']
            title_udang = bahan_udang.find('a')

            recipe_arr.append((title_udang.text.strip(), link_udang))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url9 = 'https://resepichenom.com/kategori/Seafood/show'
    response = get(url9)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    link3 = html_soup.find_all('div', class_='card-block mb-0')

    try:
        for bahan_udang1 in link3 :
            link_udang1 = bahan_udang1.find('a')['href']
            title_udang1 = bahan_udang1.find('a')

            recipe_arr.append((title_udang1.text.strip(), f"https://resepichenom.com{link_udang1}"))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url4 = 'https://resepi.my/category/sotong/'
    response = get(url4)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    sotong = html_soup.find_all('h2',class_ = 'title front-view-title')

    try:
        for bahan_sotong in sotong :
            link_sotong = bahan_sotong.find('a')['href']
            title_sotong = bahan_sotong.find('a')

            recipe_arr.append((title_sotong.text.strip(), link_sotong))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url5 = 'https://resepi.my/category/nasi/'
    response = get(url5)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    nasi = html_soup.find_all('h2',class_ = 'title front-view-title')

    try:
        for bahan_nasi in nasi :
            link_nasi = bahan_nasi.find('a')['href']
            title_nasi = bahan_nasi.find('a')

            recipe_arr.append((title_nasi.text.strip(), link_nasi))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()

conn = mysql.connector.connect(user="root", passwd="", host="localhost", database="lesungbatu")

cursor = conn.cursor()

sql = "INSERT INTO bahanmasakan (recipe_title, recipe_link) VALUES (%s, %s)"

def crawl_url(pageUrl, recipe_arr) :
    url11 = 'https://resepichenom.com/kategori/nasi/show'
    response = get(url11)
    html_soup = BeautifulSoup(response.text, 'html.parser')
    type(html_soup)
    link5 = html_soup.find_all('div', class_='card-block mb-0')

    try:

        for bahan_nasi1 in link5 :
            link_nasi1 = bahan_nasi1.find('a')['href']
            title_nasi1 = bahan_nasi1.find('a')

            recipe_arr.append((title_nasi1.text.strip(), f"https://resepichenom.com{link_nasi1}"))
            try:
                new_url = html_soup.find("li", class_ = "next")
            except AttributeError as e:
                return recipe_arr
    finally:
        return recipe_arr

recipe_arr = crawl_url("", [])
print(len(recipe_arr))
cursor.executemany(sql, recipe_arr)
conn.commit()
cursor.close()
conn.close()
