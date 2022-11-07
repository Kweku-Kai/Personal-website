from tabulate import tabulate
#create data
data = [["Mavs", 99, 32], 
        ["Suns", 91, 26], 
        ["Spurs", 94, 30], 
        ["Nets", 88, 14]]

#define header names
col_names = ["Team", "Points", "Assists"]

#display table
print(tabulate(data, headers=col_names, tablefmt="fancy_grid"))

rows=len(data)
cols=len(data[0])
cells = rows * cols
#print('The number of rows with the exception of the headers is:', rows)
print('The number of columns with the exception of the headers is:', cols)
#print('The number of cells with the exception of the headers is:', cells )





 
