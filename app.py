from flask import Flask
app = Flask(__name__)

@app.route("/")
def hello():
    return "VERSION 2 - AUTO DEPLOY WORKING!"

app.run(host="0.0.0.0", port=5000)
