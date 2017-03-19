import csv


dataset = {}

with open('outputFinal.csv') as input_file:
    for row in csv.reader(input_file, delimiter=','):
        if row[0] not in dataset:
            str={}
            dataset[row[0]]=str
        dataset[row[0]][row[1]] =int(row[2])

#print(dataset['655'])
#print(len(dataset['655']))
