from glob import glob    

DIR = '/uploads'
existing_files = glob(DIR + '*.xls')
filename = DIR + 'stuff--%d--stuff.xls' % (len(existing_files) + 1)