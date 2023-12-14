from flask import Flask, render_template, request
from flask_classful import FlaskView, route
import dis
app = Flask(__name__)
port = 8080

def encryption_key():
    key = "EXPLOITIO{_________________FLAG_________________}"
    return key

class App(FlaskView):
    def __init__(self):
        self.content = ""

    @route("/", methods=["GET","POST"])
    def index(self):
        if(request.method == "GET"):
            return render_template("index.html")
        else:
            try:
                params = request.form.to_dict(flat=False)
                if(params["title"] and params["content"]):
                    title = params["title"][0]
                    self.content = params["content"][0]
                    page = "<!DOCTYPE html><head><title>" + title + \
                    f"</title></head><body>{self.content}</body></html>".format(self=self)
                    return page
                else:
                    return "Please Set 'title' and 'content' Parameters Properly!"
            except Exception as e:
                print(e)
                return "Some Unknown Python Error!"

App.register(app,route_base="/")
if __name__ == "__main__":
    app.run(host="0.0.0.0",port=port)
