

print ("this is example.py!!")



import MySQLdb

print ("socond line");

conn = MySQLdb.connect(user="root", passwd="", db="WTAproject")
cur = conn.cursor()

cur.execute("SELECT * FROM Rating;")
row = cur.fetchone()
while row is not None:
    print (row[0], row[1], row[2])
    row = cur.fetchone()

cur.close()
conn.close()
