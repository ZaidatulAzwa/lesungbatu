# from flask import Flask
# app = Flask(__name__)
# @app.route('/')
# def index():
#     return "<h1>you are my sun shine :)</h1>"
# if __name__ == "__main__":
#     app.run(debug=True, host='0.0.0.0', port=5000)

from flask import Flask, jsonify
from scraping import scrape
app = Flask(__name__)
@app.route('/')
def index():
    return jsonify(Products=scrape())
if __name__ == "__main__":
    app.run(debug=True, host='0.0.0.0', port=5000)
