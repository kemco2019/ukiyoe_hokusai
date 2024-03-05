import sys
import pickle
import numpy as np
from transe import TRANSE

def load(filepath,E=None,L=None):
    X = []
    E = {}
    L = {}
    i = 0
    j = 0
    for line in open(filepath):
        h,l,t = line.strip().split('\t')
        if not h in E:
            E[h] = i
            i += 1
        if not t in E:
            E[t] = i
            i += 1
        if not l in L:
            L[l] = j
            j += 1
        X.append((E[h],L[l],E[t]))
    return (np.array(X),E,L)

def load2(filepath,E,L):
    X = []
    for line in open(filepath):
        h,l,t = line.strip().split('\t')
        X.append((E[h],L[l],E[t]))
    return np.array(X)

trainingfilepath = sys.argv[1]
validationfilepath = sys.argv[2]

""" Params """
r = 1
k = 50
lamb = 0.01
b = 5000
d = 'l1'
nepochs = 1000

X,E,L = load(trainingfilepath)
V = load2(validationfilepath,E,L)

transe = TRANSE(len(E),len(L),r,k,lamb,b,d)
transe.fit(X,nepochs=nepochs,validationset=V)
with open('transe.model', 'w') as f:
    pickle.dump((transe,E,L), f)