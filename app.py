from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/', methods=['GET'])
def index():
    return app.send_static_file('index.html')

@app.route('/some-endpoint', methods=['POST'])
def handle_post():
    data = request.form.get('data')
    return jsonify({"received": data})

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=8000)
