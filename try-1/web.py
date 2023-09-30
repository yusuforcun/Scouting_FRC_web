from flask import Flask, request

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def scouting_form():
    if request.method == 'POST':
        team_number = request.form.get('team-number')
        team_score = request.form.get('team-score')
        center_type = request.form.get('center-type')

        # Verileri göstermek için bir mesaj oluşturuyoruz
        message = f"Takım Numarası: {team_number}<br>"
        message += f"Takım Puanı: {team_score}<br>"
        message += f"Merkez Tipi: {center_type}"

        return message
    else:
        return '''
        <h1>Scouting Form</h1>
        <form method="POST">
            <label for="team-number">Takım Numarası:</label>
            <input type="text" id="team-number" name="team-number"><br><br>

            <label for="team-score">Takım Puanı:</label>
            <input type="number" id="team-score" name="team-score"><br><br>

            <label for="center-type">Merkez Tipi:</label>
            <select id="center-type" name="center-type">
                <option value="üst">Üst Merkez</option>
                <option value="alt">Alt Merkez</option>
                <option value="orta">Orta Merkez</option>
            </select><br><br>

            <input type="submit" value="Gönder">
        </form>
        '''

if __name__ == '__main__':
    app.run()
