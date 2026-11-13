from flask import Flask, request, render_template, redirect, url_for, flash
from flask_mysqldb import MySQL

app =Flask(__name__)

app.config["TEMPALTES_AUTO_RELOAD"] = True

app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'crud_albums'

app.secret_key = 'mysecretkey'

mysql = MySQL(app)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/guardar', methods = ['POST'])
def guardar ():
    if request.method == 'POST':
        titulo= request.form['txtTitulo']
        anho =request.form['txtAnho']
        print(titulo, anho)

        con = mysql.connection.cursor()
        con.execute('INSERT INTO tb_albums(titulo, anho) VALUES(%s,%s)', (titulo,anho))
        mysql.connection.commit()
        return 'Datos recibidos'

    flash('La pelicula fue agregada')
    return redirect(url_for('index'))

if __name__=='__main__':
    app.run(debug=True)