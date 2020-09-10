import os
from flask import Flask
from flask_api import FlaskAPI, status, exceptions
from flask import render_template
from flask import request
from flask import redirect

app = FlaskAPI(__name__)

@app.route('/')
def main():
	return redirect("/notes?path=lectures/SNP")

@app.route('/notes')
def get_file():
	file_arg = request.args.get('path', None)

	if file_arg:

		abs_file_path = os.path.join(os.path.dirname(__file__), file_arg)

		if os.path.isdir(abs_file_path):
			_dir = os.path.basename(os.path.normpath(os.path.realpath(abs_file_path)))
		else:
			_dir = os.path.basename(os.path.normpath(os.path.dirname(abs_file_path)))
			_file = os.path.basename(os.path.normpath(file_arg))

		# if it's a directory
		if os.path.isdir(os.path.join(os.getcwd(), abs_file_path)):
			_list = os.listdir(os.path.join(os.getcwd(), abs_file_path))
			return render_template("index.html", **locals(), _path_dir = _dir)

		# if it's a file
		try:
			with open(abs_file_path) as p:
				text = p.read().split("\n")
				return render_template("index.html", **locals(), _path_dir=_dir, _filename=_file)
		except IOError:
			print('Something failed')

		return render_template("error.html")

	else:
		return render_template("error.html")

if __name__ == '__main__':
	app.run(host='0.0.0.0')