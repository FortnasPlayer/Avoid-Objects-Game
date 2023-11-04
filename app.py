from flask import Flask, request, jsonify

app = Flask(__name__)


# Pobranie aktualnej wersji z serwera
@app.route('/check_for_update', methods=['GET'])
def check_for_update():
    current_version = request.args.get('current_version')

    # Tutaj możesz umieścić logikę sprawdzającą aktualizacje i zwracającą odpowiedź
    update_available = False
    latest_version = "1.0"
    download_url = ""

    return jsonify(
        {'update_available': update_available, 'latest_version': latest_version, 'download_url': download_url})


if __name__ == '__main__':
    app.run(debug=True)
