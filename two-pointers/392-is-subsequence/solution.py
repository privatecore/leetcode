class Solution(object):
    def isSubsequence(self, s, t):
        """
        :type s: str
        :type t: str
        :rtype: bool
        """
        slen = len(s)
        tlen = len(t)

        sidx = tidx = 0
        while sidx < slen and tidx < tlen:
            if s[sidx] == t[tidx]:
                sidx += 1

            tidx += 1

        return sidx == slen
