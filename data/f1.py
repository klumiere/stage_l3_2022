#!usr/bin/python3

import sys

#with open(sys.argv[1],'r') as fichierlecture:  # ouvre le fichier contenant le résultat de la requête

with open ("sample_query_output.txt",'r') as fichierlecture: # ouvre le fichier contenant le résultat de la requête

#définition des colonnes de la table
    
    col0=[]
    col1=[]
    col2=[]
    col3=[]
    col4=[]

    # permet d'afficher les valeurs des colonnes du  fichier sample_query_output.txt
    for ligne in fichierlecture:
        ma_liste=ligne.split("|")
        col0.append(ma_liste[0])
        col1.append(ma_liste[1])
        col2.append(ma_liste[2])
        col3.append(ma_liste[3])
        col4.append(ma_liste[4])
        #print(ma_liste)
        
        with open ("f1.html", 'w') as fichierecriture: # créer un fichier html f1.html dans lequel on écris les balise html
        
            #print(ma_liste)
            
            fichierecriture.write("<!DOCTYPE html> \n")
            fichierecriture.write("<html><head><meta charset='UTF-8'><title>Page Title</title>")
            
            #importation des librairies javascript de datables
            fichierecriture.write("<script type='text/javascript' src='https://code.jquery.com/jquery-3.5.1.js'></script><script type='text/javascript' src='https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js'></script><script type='text/javascript' src='f1.js'></script> \n")
    
            fichierecriture.write("<link rel='stylesheet' href='f1.css'></head><body>") 
            
            #affiche le nom des colonnes "code pdb/ num/Date/technique"
            fichierecriture.write("<table id='example' class='display'style='width:100%'><thead><tr><th>Code pdb</th><th>num</th><th>Date</th><th>Technique</th><th>Résolution</th></tr></thead>\n")
    
    
            # boucle for permettant d'afficher les attributs d'un code_pdb situé à la ligne i du fichier de lecture dans la bonne colonne
            for i in range (len(col0)):
    
                  fichierecriture.write("<tr><td><a href=file:///home/lumiere/kamely.html?"+col0[i]+" target='_blank'>"+col0[i]+"</a></td><td>"+col1[i]+"</td><td>"+col2[i]+"</td><td>"+col3[i]+"</td><td>"+col4[i]+"</td></tr>\n")
        
        
            #on réaffiche le nom des colonnes      
    fichierecriture.write(" </tbody><tfoot><tr><th>Nom du pdb</th><th>num</th><th>Date</th><th>Technique</th><th>Résolution</th></tr></tfoot></table></body></html>")
    
    
    
    
    
    
       




