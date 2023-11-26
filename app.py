from flask import Flask, render_template

app = Flask(__name__)

oznamy = [
    {"nazov": "Pozváfnka na Oslavy Dňa Zeme", "text": """Nezmeškajte prednášku o ochrane prírody, ktorá sa uskutoční v miestnom kultúrnom dome dňa 5. júla.""", "date": "28.11.2023"},
    {"nazov": "Pozvánka na Oslavy Dňa Zeme", "text": "Plánujeme výsadbu nových stromov v oblasti severného parku. Všetci sú vítaní sa zúčastniť 22. novembra od 9:00.", "date": "28.11.2023"},
    {"nazov": "Zber Odpadu v Parku", "text": "Zorganizujeme zber odpadu v mestskom parku tento víkend. Pridajte sa k nám a pomôžte udržať náš park čistý!", "date": "28.11.2023"},
    {"nazov": "Pozvánka na Oslavy Dňa Zeme", "text": "Srdečne vás pozývame na oslavy Dňa Zeme, ktoré sa uskutočnia 22. apríla na hlavnom námestí.", "date": "28.11.2023"},
    {"nazov": "Zber Odpadu v Parku", "text": "Nezmeškajte prednášku o ochrane prírody, ktorá sa uskutoční v miestnom kultúrnom dome dňa 5. júla.", "date": "28.11.2023"},
    {"nazov": "Zber Odpadu v Parku", "text": "Zorganizujeme zber odpadu v mestskom parku tento víkend. Pridajte sa k nám a pomôžte udržať náš park čistý!", "date": "28.11.2023"},
    {"nazov": "Uzavretie Lesnej Cesty", "text": "Zapojte sa do našej fotografickej súťaže a zachyťte krásy našej prírody. Najlepšie snímky budú vystavené v knižnici.", "date": "28.11.2023"},
    {"nazov": "Zber Odpadu v Parku", "text": "Nezmeškajte prednášku o ochrane prírody, ktorá sa uskutoční v miestnom kultúrnom dome dňa 5. júla.", "date": "28.11.2023"},
]


@app.route('/')
def index():
    return render_template('index.html', oznamy=oznamy)

if __name__ == '__main__':
    app.run(debug=True)
